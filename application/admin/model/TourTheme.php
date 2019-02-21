<?php

namespace app\admin\model;

use think\Model;

class TourTheme extends Model
{
    // 表名
    protected $name = 'tour_theme';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    
    // 追加属性
    protected $append = [

    ];


    public function tour()
    {
        return $this->belongsTo('Tour', 'tour_id', 'id', [], 'LEFT')->setEagerlyType(0);
    }

    public function style()
    {
        return $this->belongsTo('Style', 'type_id', 'type', [], 'LEFT')->setEagerlyType(0);
    }
}
