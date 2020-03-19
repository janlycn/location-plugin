<?php

return [
    'plugin' => [
        'name' => '位置',
        'description' => '位置基础特征，比如省/地区'
    ],
    'permissions' => [
        'settings' => '位置管理',
    ],
    'location' => [
        'label' => '位置信息',
        'new' => '新建位置信息',
        'create_title' => '创建位置信息',
        'update_title' => '修改位置信息',
        'preview_title' => '预览位置信息'
    ],
    'locations' => [
        'menu_label' => '位置信息',
        'menu_description' => '管理国家和地区.',
        'disabled_label' => '隐藏被禁用项',
        'enabled_label' => '启用',
        'enabled_help' => '被禁用后不会继续在前端显示.',
        'enable_or_disable_title' => "启用 或 禁用",
        'enable_or_disable' => '启用 或 禁用',
        'selected_amount' => '已选择: :amount',
        'enable_success' => '成功启用所选项.',
        'disable_success' => '成功禁用所选项.',
        'disable_confirm' => '确认禁用该项?',
        'unpin_label' => '取消锁定',
        'pinned_label' => '锁定',
        'pinned_help' => '锁定的位置排在列表的第一位。',
        'pin_or_unpin_title' => "锁定或取消锁定位置",
        'pin_or_unpin' => '锁定或取消锁定',
        'pin_success' => '已成功锁定选择的位置。',
        'unpin_success' => '已成功解锁选定的位置。',
        'unpin_confirm' => '确定吗？',
        'list_title' => '管理位置信息',
        'delete_confirm' => '确认删除该记录?',
        'return_to_list' => '返回位置列表',
        'default_country' => '默认国家',
        'default_country_comment' => '用户未设置国家时系统默认国家.',
        'default_state' => '省市/地区',
        'default_state_comment' => '用户未选择地区时默认使用省市/地区.',
    ],
    'settings' => [
        'menu_label' => '位置设定',
        'menu_description' => '管理位置基础设定.',
        'google_maps_key' => 'Google Maps API Key',
        'google_maps_key_comment' => '如果你计划使用谷歌地图服务，请在这里输入 API Key。',
        'credentials_tab' => '证书',
    ],
    'state' => [
        'label' => '省市/地区',
        'name' => '名字',
        'select' => '-- 选择省市/地区 --',
        'name_comment' => '输入省市/地区名.',
        'code' => '代码',
        'code_comment' => '输入省市/地区代码.'
    ],
    'country' => [
        'label' => '国家',
        'name' => '名字',
        'select' => '-- 选择国家 --',
        'code' => '代码',
        'code_comment' => '输入国家唯一编码.',
        'enabled' => '启用',
        'pinned' => '锁定',
    ]
];
