<?php

namespace app\admin\model;

use think\Model;

class Country extends Model
{
    // 表名
    protected $name = 'country';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    
    // 追加属性
    protected $append = [
        'statue_text'
    ];
    

    
    public function getStatueList()
    {
        return ['0' => __('Statue 0'),'1' => __('Statue 1')];
    }     


    public function getStatueTextAttr($value, $data)
    {        
        $value = $value ? $value : (isset($data['statue']) ? $data['statue'] : '');
        $list = $this->getStatueList();
        return isset($list[$value]) ? $list[$value] : '';
    }




}
