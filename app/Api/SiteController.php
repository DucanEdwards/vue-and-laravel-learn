<?php

namespace App\Api;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;
use Auth;
use App\Http\Resources\SiteResource;

/**
 * 站点管理
 */
class SiteController extends Controller
{
    public function __construct() {
        $this->middleware('auth:sanctum');
    }
    //列表
    public function index()
    {
        return SiteResource::collection(Site::all());
    }

    // 新增站点
    public function store(Request $request,Site $site)
    {
        $request->validate([
            'title'=>['required','between:3,100'],
            'domain'=>['required','url'],
        ]);

        $site->fill($request->input());
        $site->user_id=Auth::id();
        $site->save();
        return $site;
    }

    //显示某一个界面
    public function show(Site $site)
    {
        return new SiteResource($site);
    }


    /**
     * 更新站点
     */
    public function update(Request $request, Site $site)
    {
        $this->authorize('update',$site);
        $site->fill($request->input())->save();
        return ['message'=>'修改成功'];
    }

    //删除
    public function destroy(Site $site)
    {
        $this->authorize('delete',$site);
        $site->delete();
        return ['message'=>'删除成功'];
    }
}
