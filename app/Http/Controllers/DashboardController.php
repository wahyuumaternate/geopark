<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\WarisanBumi;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(Request $request): View
    {
        $user = $request->user();

        if ($user->role === 'youth_forum') {
            return view('dashboard', $this->youthForumStats($user));
        }

        return view('dashboard', $this->adminStats());
    }

    /**
     * Statistik untuk role 'youth_forum' — hanya data miliknya sendiri.
     */
    protected function youthForumStats($user): array
    {
        $baseQuery = Informasi::where('kategori', Informasi::KATEGORI_YOUTH_FORUM)->where('user_id', $user->id);

        $youthForumCount = (clone $baseQuery)->count();
        $youthForumPublishedCount = (clone $baseQuery)->where('status', true)->count();
        $youthForumDraftCount = $youthForumCount - $youthForumPublishedCount;

        return [
            'youthForumCount' => $youthForumCount,
            'youthForumPublishedCount' => $youthForumPublishedCount,
            'youthForumDraftCount' => $youthForumDraftCount,
        ];
    }

    /**
     * Statistik untuk role 'admin' — data keseluruhan situs.
     */
    protected function adminStats(): array
    {
        return [
            'geologiCount' => WarisanBumi::where('section', 'geologi')->count(),
            'biologiCount' => WarisanBumi::where('section', 'biologi')->count(),
            'budayaCount' => WarisanBumi::where('section', 'budaya')->count(),
            'kontenPublikCount' => Informasi::count(),
        ];
    }
}
