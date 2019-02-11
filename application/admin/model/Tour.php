<?php

namespace app\admin\model;

use think\Model;

class Tour extends Model
{
    // 表名
    protected $name = 'tour';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    
    // 追加属性
    protected $append = [
        'ishot_text',
        'status_text'
    ];
    

    
    public function getIshotList()
    {
        return ['0' => __('Ishot 0'),'1' => __('Ishot 1')];
    }     

    public function getStatusList()
    {
        return ['0' => __('Status 0'),'1' => __('Status 1')];
    }     

    public function getRateList()
    {
        return [
            '1' => __('Rate 1'),
            '2' => __('Rate 2'),
            '3' => __('Rate 3'),
            '4' => __('Rate 4'),
            '5' => __('Rate 5')
        ];
    }     

    public function getIshotTextAttr($value, $data)
    {        
        $value = $value ? $value : (isset($data['ishot']) ? $data['ishot'] : '');
        $list = $this->getIshotList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getStatusTextAttr($value, $data)
    {        
        $value = $value ? $value : (isset($data['status']) ? $data['status'] : '');
        $list = $this->getStatusList();
        return isset($list[$value]) ? $list[$value] : '';
    }

    

    public function group()
    {
        return $this->belongsTo('TourGroup', 'group_id', 'id', [], 'LEFT')->setEagerlyType(0);
    }

    public function country()
    {
        return $this->belongsTo('Country', 'country_id', 'id', [], 'LEFT')->setEagerlyType(0);
    }
}
