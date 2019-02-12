<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\common\library\Token;


class Index extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = 'darong';

    public function _initialize()
    {
        $this->model = new \app\admin\model\Tour;
        $this->groupList = Db('tour_group')
            ->where('status', '1')
            ->select();  
        $this->cityList = Db('country')
            ->where('status', '1')
            ->select();

        parent::_initialize();
    }

    public function index()
    {
        $productlist = $this->model
            ->table('fa_tour tour, fa_tour_group group, fa_country country')
            ->where('tour.group_id = group.id and tour.country_id = country.id')
            ->field('tour.id as id, tour.description as p, tour.img as image, tour.title as title, country.name as country, group.name as type, group.filter filter, tour.price as price, tour.img as image, tour.rate as rate')
            // ->order('tour.createtime desc' )
            ->select();

        $newslist = Db('news')
            ->table('fa_news news, fa_news_category category')
            ->where('news.category_id = category.id')
            ->field('news.id as id, news.title as title, news.content as content, news.image as image, category.name as category')
            ->select();  

        $this->view->assign('cityList',$this->cityList);
        $this->view->assign('groupList',$this->groupList);
        $this->view->assign('productlist',$productlist);
        $this->view->assign('newslist',$newslist);

        $this->assignconfig('cityList',$newslist);
        return $this->view->fetch();
    }

    public function about()
    {
        $this->view->assign('cityList',$this->cityList);
        $this->view->assign('groupList',$this->groupList);
        return $this->view->fetch();
    }

    public function tour()
    {
        $id = $this->request->param('id');
        if($id)
        {
            $productList = $this->model
            ->table('fa_tour tour, fa_tour_group group, fa_country country')
            ->where("tour.group_id = '$id' and tour.group_id = group.id and tour.country_id = country.id")
            ->field('tour.id as id, tour.description as p, tour.img as image, tour.title as title, country.name as country, group.name as type, group.filter filter, tour.price as price, tour.img as image, tour.rate as rate')
            ->select();

            $groupName = Db('tour_group')
                ->where('id',$id)
                ->find();
                
            $this->view->assign('groupname',$groupName);
            $this->view->assign('productlist',$productList);
            $this->assignconfig('productlist',$groupName);
            $this->view->assign('cityList',$this->cityList);
            $this->view->assign('groupList',$this->groupList);

            return $this->view->fetch();
        }else{
            $this->error('错误请求');
        }
    }

    public function tour_detail()
    {
        $id = $this->request->param('id');
        if($id)
        {
            $contentList = Db('tour_theme')
                ->where("tour_id = '$id'")
                ->select();

            $tourName = $this->model
                ->where('id',$id)
                ->field('title, img')
                ->find();
                
            $this->view->assign('tourname',$tourName);
            $this->view->assign('contentList',$contentList);
            $this->assignconfig('contentList',$contentList);

            $this->view->assign('cityList',$this->cityList);
            $this->view->assign('groupList',$this->groupList);
            return $this->view->fetch();
        }else{
            $this->error('错误请求');
        }
    }

    public function city()
    {
        $id = $this->request->param('id');
        if($id)
        {
            $productList = $this->model
            ->table('fa_tour tour, fa_tour_group group, fa_country country')
            ->where("tour.group_id = '$id' and tour.group_id = group.id and tour.country_id = country.id")
            ->field('tour.id as id, tour.description as p, tour.img as image, tour.title as title, country.name as country, group.name as type, group.filter filter, tour.price as price, tour.img as image, tour.rate as rate')
            ->select();
            
            $countryList = Db('country')
                ->where('id',$id)
                ->find();
                
            $this->view->assign('countrylist',$countryList);
            $this->view->assign('productlist',$productList);
            $this->assignconfig('productlist',$countryList);

        $this->view->assign('cityList',$this->cityList);
        $this->view->assign('groupList',$this->groupList);
            return $this->view->fetch();
        }else{
            $this->error('错误请求');
        }
    }

    public function blog()
    {
        $newslist = Db('news')
            ->where('status', '1')
            ->select();  
        $categorylist = Db('news_category')
            ->where('status', '1')
            ->select();  

        $this->view->assign('newslist',$newslist);
        $this->view->assign('categorylist',$categorylist);
        $this->view->assign('cityList',$this->cityList);
        $this->view->assign('groupList',$this->groupList);
        return $this->view->fetch();
    }

    public function blog_detail()
    {
        $id = $this->request->param('id');
        if($id)
        {
            $newsContent = Db('news')->find($id);

            // $tourName = $this->model
            //     ->where('id',$id)
            //     ->field('title, img')
            //     ->find();

        $this->view->assign('newsContent',$newsContent);
        $this->assignconfig('newContent',$newsContent);

        $this->view->assign('cityList',$this->cityList);
        $this->view->assign('groupList',$this->groupList);
        return $this->view->fetch();
    }else{
        $this->error('错误请求');
    }
}

    public function contact()
    {
        $this->view->assign('cityList',$this->cityList);
        $this->view->assign('groupList',$this->groupList);
        return $this->view->fetch();
    }

    public function news()
    {
        $newslist = [];
        return jsonp(['newslist' => $newslist, 'new' => count($newslist), 'url' => 'https://www.fastadmin.net?ref=news']);
    }

}
