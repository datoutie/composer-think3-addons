### 说明

- 从onethink中提取
- 支持thinkphp 3.2.3

### 安装
```shell
composer require mrli/composer-think3-addons:0.0.6
```
### 配置
- 项目配置中添加
```php
<?php
return array(
	'AUTOLOAD_NAMESPACE' => array('Addons' => ADDON_PATH), 
	'ADDONS_LIST'=>array('hook'=>'addons')
)
```
- 其中 ADDONS_LIST中添加  钩子=>插件名
### 调用
```php
hook('hook', array());
```
### 注意
- 由于个人初学composer,映射有些问题,需要以下操作才能正常使用,望有路过的大神指点
##### Controller层
- 应用中创建模块Addon/Controller,并将src/addons/的AddonsController.class.php文件移入
##### Behavior层
- 创建Common/Behavior,并将src/addons/的InitHookBehavior.class.php文件移入
##### Conf层
- 创建Common/Conf,并将src/addons/的tags.php文件移入

##### 目录结构
    ----Addons
    ---插件目录
    ----Application
    ---Addon
    --Controller
    -AddonsController.class.php
    ---Common
    --Behavior
    -InitHookBehavior.class.php
    --Conf
    -tags.php