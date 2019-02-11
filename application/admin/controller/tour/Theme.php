<?php

namespace app\admin\controller\tour;

use app\common\controller\Backend;

/**
 * 文章主题
 *
 * @icon fa fa-circle-o
 */
class Theme extends Backend
{
    
    /**
     * Theme模型对象
     * @var \app\admin\model\TourTheme
     */
    protected $model = null;

    public function _initialize()
    {
        parent::_initialize();
        $this->model = new \app\admin\model\TourTheme;

    }
    
    /**
     * 默认生成的控制器所继承的父类中有index/add/edit/del/multi五个基础方法、destroy/restore/recyclebin三个回收站方法
     * 因此在当前控制器中可不用编写增删改查的代码,除非需要自己控制这部分逻辑
     * 需要将application/admin/library/traits/Backend.php中对应的方法复制到当前控制器,然后进行修改
     */

    /**
     * 查看
     */
    public function index()
    {
        //当前是否为关联查询
        $this->relationSearch = true;
        //设置过滤方法
        $this->request->filter(['strip_tags']);
        if ($this->request->isAjax())
        {
            //如果发送的来源是Selectpage，则转发到Selectpage
            if ($this->request->request('keyField'))
            {
                return $this->selectpage();
            }
            list($where, $sort, $order, $offset, $limit) = $this->buildparams();
            $total = $this->model
                    ->with(['tour','style'])
                    ->where($where)
                    ->order($sort, $order)
                    ->count();

            $list = $this->model
                    ->with(['tour','style'])
                    ->where($where)
                    ->order($sort, $order)
                    ->limit($offset, $limit)
                    ->select();

            foreach ($list as $row) {
                
            }
            $list = collection($list)->toArray();
            $result = array("total" => $total, "rows" => $list);

            return json($result);
        }
        return $this->view->fetch();
    }

    public function edit($ids = NULL)
    {
        $row = $this->model->get($ids);
        if (!$row)
            $this->error(__('No Results were found'));
        $this->view->assign('tourList', build_select('row[tour_id]', \app\admin\model\Tour::column('id,title'), $row['tour_id'], ['class' => 'form-control selectpicker']));
        return parent::edit($ids);
    }

    public function add($tour_id = NULL)
    {
        $tourModel = new \app\admin\model\Tour;

        if( $tour_id != NULL){
            $this->view->assign('tourList', build_select('row[tour_id]', $tourModel->where('id', $tour_id)->column('id,title'), [], ['class' => 'form-control selectpicker']));
        }else{
            $this->view->assign('tourList', build_select('row[tour_id]', $tourModel->column('id,title'), [], ['class' => 'form-control selectpicker']));
        }
        return parent::add();
    }

    public function details($tour_id = NULL)
    {
        $row = $this->model
            ->where('tour_id', $tour_id)
            ->select();
        if (!$row)
            $row = [];

        //from Backend.php
        $adminIds = $this->getDataLimitAdminIds();
        if (is_array($adminIds)) {
            if (!in_array($row[$this->dataLimitField], $adminIds)) {
                $this->error(__('You have no permission'));
            }
        }
        if ($this->request->isPost()) { 
            $params = $this->request->post();
            if ($params) {
                try {
                    $count = 0;
                    foreach($params as $id => $value){
                        $count += $this->model->allowField(true)->save($value, ['id' => $id]);
                    }
                    if ($count) {
                        $this->success();
                    } else {
                        $this->error(__('No rows were updated'));
                    }
                } catch (\think\exception\PDOException $e) {
                    $this->error($e->getMessage());
                } catch (\think\Exception $e) {
                    $this->error($e->getMessage());
                }
            }
            $this->error(__('Parameter %s can not be empty', ''));
        }
        $this->view->assign("row", $row);
        $this->view->assign("tour_id", $tour_id);
        $this->assignconfig("tour_id", $tour_id);

        return $this->view->fetch();
    }
}
