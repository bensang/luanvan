<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\City;
use App\District;
use App\Price;
use App\Area;
use App\CustomLink;
use App\ArticlesCate;
use App\Articles;
use App\LandingProjects;
use App\EstateType;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){
        $banList = $thueList = [];  
        $tmp = EstateType::all();
        foreach($tmp as $est){
            if($est->type == 1){
                $banList[] = $est;
            }else{
                $thueList[] = $est;
            }
        }
        $cityList = City::all();
        $districtList = District::all();
        $priceList = Price::all();
        $areaList = Area::all();
        $customLink = CustomLink::all();
        $articleCate = ArticlesCate::where('status', 1)->get();
        $tinRandom = Articles::where('cate_id', 4)->get();
        $landingList = LandingProjects::offset(0)->limit(2)->get();
        $view->with(['customLink'=>$customLink, 'articleCate' => $articleCate, 'tinRandom' => $tinRandom, 'landingList'=>$landingList, 'banList' => $banList, 'thueList' => $thueList, 'cityList'=>$cityList, 'districtList'=>$districtList, 'priceList'=>$priceList, 'areaList'=>$areaList]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
