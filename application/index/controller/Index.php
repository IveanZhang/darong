<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\common\library\Token;
use addons\faems\Faems;

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
        $this->recentNews = Db('news')
            ->table('fa_news news, fa_news_category category')
            ->where('news.category_id = category.id')
            ->field('news.id as id, news.createtime as createtime, news.title as title, news.descp as descp, news.content as content, news.image as image, category.name as category')
            ->limit('3')
            ->select(); 
        $this->recomLists = Db('tour')
            ->table('fa_tour tour, fa_country country')
            ->where("tour.country_id = country.id and tour.ishot='1'")
            ->field('tour.id as id, tour.ishot as ishot, tour.img as image, tour.title as title, country.name as country, tour.price as price, tour.img as image, tour.rate as rate')
            ->limit('8')
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
            ->limit('4')
            ->field('news.id as id, news.createtime as createtime, news.title as title, news.content as content, news.image as image, category.name as category')
            ->select();  

        $this->view->assign('recentNews', $this->recentNews);
        $this->view->assign('cityList',$this->cityList);
        $this->view->assign('groupList',$this->groupList);
        $this->view->assign('recomLists', $this->recomLists);

        $this->view->assign('productlist',$productlist);
        $this->view->assign('newslist',$newslist);

        $this->assignconfig('navIndex', 0);
        return $this->view->fetch();
    }

    public function about()
    {
        $this->view->assign('recentNews', $this->recentNews);
        $this->view->assign('cityList',$this->cityList);
        $this->view->assign('groupList',$this->groupList);
        $this->assignconfig('navIndex', 1);

        return $this->view->fetch();
    }

    public function tour()
    {
        $params = $this->request->param();
        $id = $this->request->param('id');
        if($id)
        {
            $productList = $this->model
            ->table('fa_tour tour, fa_tour_group group, fa_country country')
            ->where("tour.group_id = '$id' and tour.group_id = group.id and tour.country_id = country.id")
            ->field('tour.id as id, tour.description as p, tour.img as image, tour.title as title, country.name as country, group.name as type, group.filter filter, tour.price as price, tour.img as image, tour.rate as rate')
            ->paginate(6);

            $page = $productList->render();

            $groupName = Db('tour_group')
                ->where('id',$id)
                ->find();
                
            $this->view->assign('groupname',$groupName);
            $this->view->assign('productlist',$productList);
            $this->view->assign('page', $page);

            $this->view->assign('recentNews', $this->recentNews);
            $this->view->assign('cityList',$this->cityList);
            $this->view->assign('groupList',$this->groupList);

            $this->view->assign('recomLists', $this->recomLists);
            $this->assignconfig('navIndex', 1);
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
                
            $this->assignconfig('contentlist',$contentList);
            $this->view->assign('index', 0);
            $this->view->assign('tourname',$tourName);
            $this->view->assign('contentList',$contentList);

            $this->view->assign('recentNews', $this->recentNews);
            $this->view->assign('cityList',$this->cityList);
            $this->view->assign('groupList',$this->groupList);
            $this->assignconfig('navIndex', 2);

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
                ->where("tour.country_id = '$id' and tour.group_id = group.id and tour.country_id = country.id")
                ->field('tour.id as id, tour.description as p, tour.img as image, tour.title as title, country.name as country, group.name as type, group.filter filter, tour.price as price, tour.img as image, tour.rate as rate')
                ->paginate(6);
            $page = $productList->render();
            
            $countryList = Db('country')
                ->where('id',$id)
                ->find();
                
            $this->view->assign('countrylist',$countryList);
            $this->view->assign('productlist',$productList);
            $this->view->assign('page', $page);

            $this->view->assign('recentNews', $this->recentNews);
            $this->view->assign('cityList',$this->cityList);
            $this->view->assign('groupList',$this->groupList);
            $this->view->assign('recomLists', $this->recomLists);
            $this->assignconfig('navIndex', 3);

            return $this->view->fetch();
        }else{
            $this->error('错误请求');
        }
    }

    public function blog()
    {
        $newslist = Db('news')
            ->table('fa_news news, fa_news_category category')
            ->where('news.category_id = category.id')
            ->field('news.id as id, news.createtime as createtime, news.title as title, news.descp as descp, news.content as content, news.image as image, category.name as category')
            ->paginate(3);  

        $page = $newslist->render();
        $categorylist = Db('news')
            ->field(array("count(category_id)"=>"category_count" , "category_id"))
            ->group('category_id')
            ->select();

        $categorynames = Db('news_category')
            ->where('status', '1')
            ->select();
        $categoryNameList = [];
        foreach($categorynames as $value){
            $categoryNameList[$value['id']] = $value['name'];
        }
        $result = [];
        foreach ($categorylist as $key => $v)
        {
            $result[$key] = [
                'category_name' => $categoryNameList[$v['category_id']],
                'category_count' => $v['category_count'],
            ];
        }

        $this->view->assign('newslist',$newslist);
        $this->view->assign('page', $page);
        $this->view->assign('categorylist',$result);

        $this->view->assign('recentNews', $this->recentNews);
        $this->view->assign('cityList',$this->cityList);
        $this->view->assign('groupList',$this->groupList);
        $this->assignconfig('navIndex', 4);

        return $this->view->fetch();
    }

    public function blog_detail()
    {
        $id = $this->request->param('id');
        if($id)
        {
            $newsContent = Db('news')->find($id);

            $categorylist = Db('news')
                ->field(array("count(category_id)"=>"category_count" , "category_id"))
                ->group('category_id')
                ->select();

            $categorynames = Db('news_category')
                ->where('status', '1')
                ->select();
            $categoryNameList = [];
            foreach($categorynames as $value){
                $categoryNameList[$value['id']] = $value['name'];
            }
            $result = [];
            foreach ($categorylist as $key => $v)
            {
                $result[$key] = [
                    'category_name' => $categoryNameList[$v['category_id']],
                    'category_count' => $v['category_count'],
                ];
            }

            $this->view->assign('newsContent',$newsContent);
            $this->view->assign('categorylist',$result);

            $this->view->assign('recentNews', $this->recentNews);
            $this->view->assign('cityList',$this->cityList);
            $this->view->assign('groupList',$this->groupList);
            $this->assignconfig('navIndex', 4);

            return $this->view->fetch();
        }else{
        $this->error('错误请求');
    }
}

    public function contact()
    {
        $this->view->assign('cityList',$this->cityList);
        $this->view->assign('groupList',$this->groupList);
        $this->view->assign('recentNews', $this->recentNews);
        $this->assignconfig('navIndex', 6);

        return $this->view->fetch();
    }

    public function search(){
        $keyword = $this->request->param('keyword');
        
        $country = Db('country')->where('name', 'like', '%'.$keyword.'%')->find();
        $group = Db('tour_group')->where('name', 'like', '%'.$keyword.'%')->find();

        $productList = [];
        if($country){
            $productList = $this->model
            ->table('fa_tour tour, fa_tour_group group, fa_country country')
            ->where("country.name like '%$keyword%' and tour.group_id = group.id and tour.country_id = country.id")
            ->field('tour.id as id, tour.description as p, tour.img as image, tour.title as title, country.name as country, group.name as type, group.filter filter, tour.price as price, tour.img as image, tour.rate as rate')
            ->paginate(6);
        }else if($group){
            $productList = $this->model
            ->table('fa_tour tour, fa_tour_group group, fa_country country')
            ->where("group.name like '%$keyword%' and tour.group_id = group.id and tour.country_id = country.id")
            ->field('tour.id as id, tour.description as p, tour.img as image, tour.title as title, country.name as country, group.name as type, group.filter filter, tour.price as price, tour.img as image, tour.rate as rate')
            ->paginate(6);
        }else{
            $productList = $this->model
            ->table('fa_tour tour, fa_tour_group group, fa_country country')
            ->where("tour.title like '%$keyword%' and tour.group_id = group.id and tour.country_id = country.id")
            ->field('tour.id as id, tour.description as p, tour.img as image, tour.title as title, country.name as country, group.name as type, group.filter filter, tour.price as price, tour.img as image, tour.rate as rate')
            ->paginate(6);
        }

        $page = $productList->render();

        $this->view->assign('keyword', $keyword);
        $this->view->assign('productList', $productList);
        $this->view->assign('page', $page);

        $this->view->assign('recentNews', $this->recentNews);
        $this->view->assign('cityList',$this->cityList);
        $this->view->assign('groupList',$this->groupList);
        $this->view->assign('recomLists', $this->recomLists);
        $this->assignconfig('navIndex', 0);

        return $this->view->fetch();
    }

    public function feedback(){
        if ($this->request->isPost()) {
            $params = $this->request->post();
            if ($params) {
                try {
                    $model = new \app\admin\model\Feedback;

                    $result = $model->allowField(true)->save($params);
                    if ($result !== false) {
                        $this->success('留言成功！');
                    } else {
                        $this->error($model->getError());
                    }
                } catch (\think\exception\PDOException $e) {
                    $this->error($e->getMessage());
                } catch (\think\Exception $e) {
                    $this->error($e->getMessage());
                }
            }
            $this->error(__('Parameter %s can not be empty', ''));
        }
    }
}
