<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Services\AuthService;
use App\Traits\DefaultImage;
use App\Models\User;
//use App\Models\PhoneTokens;
use App\Traits\GeneralTrait;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Laravel\Socialite\Facades\Socialite;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Http\Resources\{CompanyResource, UserResources};
use Twilio\Rest\Client;

class AuthController extends Controller
{
    private AuthService $authService;

    /**
     * @param AuthService $authService
     */
    public function __construct(AuthService $authService)
    {
        $this->middleware('auth_jwt')->only(['update_profile','deleteAccount','me']);
        $this->authService = $authService;
    }

    public function sendWhatsappOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|numeric',
        ]);

        $accountSid = env('TWILIO_ACCOUNT_SID');
        $authToken = env('TWILIO_AUTH_TOKEN');
        $twilioNumber = env('TWILIO_PHONE_NUMBER');


        $twilio = new Client($accountSid, $authToken);

        $otp = rand(1000, 9999);

        $phoneNumber = '+1' . $request->phone;

        $message = "Your OTP for WhatsApp is: $otp";

        try {
            $twilio->messages
                ->create(
                    $phoneNumber,
                    [
                        'from' => $twilioNumber,
                        'body' => $message,
                    ]
                );

            return response()->json(['message' => 'OTP sent successfully', 'otp' => $otp], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function login(Request $request)
    {
       return $this->authService->login($request);
    }//end fun

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        return $this->authService->register($request);
    }//end fun

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        return $this->authService->logout($request);

    }//end fun
    public function update_profile(request $request){
        return $this->authService->update_profile($request);
    }//end fun

    public function deleteAccount(Request $request)
    {
        return $this->authService->delete_account($request);
    }//end fun

    public function redirectToProvider($provider)
    {
        $validated = $this->validateProvider($provider);
        if (!is_null($validated)) {
            return $validated;
        }

        return Socialite::driver($provider)->stateless()->redirect();

    }

    /**
     * Obtain the user information from Provider.
     *
     * @param $provider
     * @return JsonResponse
     */
    public function handleProviderCallback($provider)
    {

        $validated = $this->validateProvider($provider);
        if (!is_null($validated)) {
            return $validated;
        }
//        dd(Socialite::driver("facebook")->stateless()->user());
        try {
            $user = Socialite::driver($provider)->stateless()->user();
        } catch (ClientException $exception) {
            return response()->json(['error' => 'Invalid credentials provided.'], 422);
        }
        $userCreated = User::firstOrCreate(
            [
                'email' => $user->getEmail(),
            ],
            [
                'user_type' => 0,
                'email_verified_at' => now(),
                'name' => $user->getName(),
                'image' => $user->getAvatar(),
                'status' => true,
            ]
        );
        $userCreated->providers()->updateOrCreate(
            [
                'provider' => $provider,
                'provider_id' => $user->getId(),
            ],
            [
                'avatar' => $user->getAvatar()
            ]
        );
        Auth::login($userCreated);
//        dd(Auth::login($userCreated));
        $token = JWTAuth::fromUser($userCreated);
        $userCreated['token'] =$token;
        return response($token."watan-app4444");
    }

    /**
     * @param $provider
     * @return JsonResponse
     */
    protected function validateProvider($provider)
    {
        if (!in_array($provider, ['facebook', 'github', 'google'])) {
            return response()->json(['error' => 'Please login using facebook, github or google'], 422);
        }
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me(Request $request)
    {
        return $this->authService->profile($request);
    }
}//end class
