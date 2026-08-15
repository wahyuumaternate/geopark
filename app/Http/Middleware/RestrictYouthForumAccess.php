<?php

namespace App\Http\Middleware;

use App\Models\Informasi;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RestrictYouthForumAccess
{
    /**
     * Nama route admin yang boleh diakses oleh role 'youth_forum'.
     *
     * @var array<int, string>
     */
    protected array $allowedRoutes = ['admin.youthforum.index', 'admin.informasi.create', 'admin.informasi.store', 'admin.informasi.edit', 'admin.informasi.update', 'admin.informasi.destroy'];

    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        // Middleware ini hanya berlaku untuk role 'youth_forum'.
        // Role 'admin' tidak terpengaruh sama sekali.
        if (!$user || $user->role !== 'youth_forum') {
            return $next($request);
        }

        $routeName = $request->route()?->getName();

        if (!in_array($routeName, $this->allowedRoutes, true)) {
            abort(403, 'Anda tidak memiliki akses ke halaman ini.');
        }

        // Route create/store informasi dipakai bersama untuk 'berita' & 'youth-forum'
        // via parameter {kategori} → pastikan hanya 'youth-forum' yang diizinkan.
        if (in_array($routeName, ['admin.informasi.create', 'admin.informasi.store'], true)) {
            if ($request->route('kategori') !== 'youth-forum') {
                abort(403, 'Anda hanya dapat mengelola konten Youth Forum.');
            }
        }

        // Route edit/update/destroy informasi memakai {informasi} (model),
        // bukan {kategori} → cek kategori dari data model itu sendiri.
        if (in_array($routeName, ['admin.informasi.edit', 'admin.informasi.update', 'admin.informasi.destroy'], true)) {
            $informasi = $request->route('informasi');

            if ($informasi && $informasi->kategori !== 'youth-forum') {
                abort(403, 'Anda hanya dapat mengelola konten Youth Forum.');
            }
        }

        return $next($request);
    }
}
