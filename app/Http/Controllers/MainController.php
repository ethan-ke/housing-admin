<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * @var int $limit Per Page.
     */
    public int $limit;

    /**
     * @var string $guard
     */
    public string $guard;

    /**
     * Controller constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->guard = $request->get('guard') ?? '';
        Auth()->shouldUse($this->guard);
        $this->limit = $request->limit ?? 50;
    }

    /**
     * @return Merchant
     */
    public function user(): Merchant
    {
        return Auth::user();
    }

    /**
     * @param string $token
     * @return JsonResponse
     */
    protected function respondWithToken(string $token): JsonResponse
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'Bearer',
            'expires_in'   => Auth::factory()->getTTL() * 60,
        ]);
    }
}
