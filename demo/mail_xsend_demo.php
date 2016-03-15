<?PHP
    /*
     | Submail mail/xsend API demo
     | SUBMAIL SDK Version 2.3 --PHP
     | copyright 2011 - 2016 SUBMAIL
     |--------------------------------------------------------------------------
     */
    
    /*
     |载入 app_config 文件
     |--------------------------------------------------------------------------
     */
    require '../app_config.php';
    
    /*
     |载入 SUBMAILAutoload 文件
     |--------------------------------------------------------------------------
     */
    
    require_once('../SUBMAILAutoload.php');
    
    /*
     |初始化 MAILXsend 类
     |--------------------------------------------------------------------------
     */
    
    $submail=new MAILXsend($mail_configs);
    
    /*
     |可选参数
     |--------------------------------------------------------------------------
     |添加收件人
     |第一个参数为联系人的邮件地址，第二个参数为联系人名称（可选）
     |可多次调用
     |--------------------------------------------------------------------------
     */
    
    $submail->AddTo('xxx@xxx.xx','name');
    
    /*
     |可选参数
     |--------------------------------------------------------------------------
     |添加地址薄标识
     |可多次调用
     |--------------------------------------------------------------------------
     */
    
    $submail->AddAddressbook('subscribe');
    
    /*
     |可选参数
     |--------------------------------------------------------------------------
     |设置发件人地址和名称
     |第一个参数为发件人邮件地址
     |第二个参数为发件人称谓（可选）
     |--------------------------------------------------------------------------
     */
    
    $submail->SetSender('xxx@xxx.xx','发件人名称');
    
    /*
     |可选参数
     |--------------------------------------------------------------------------
     |设置回复邮件地址
     |--------------------------------------------------------------------------
     */
    
    $submail->SetReply('xxx@xxx.xx');
    
    /*
     |可选参数
     |--------------------------------------------------------------------------
     |设置邮件标题
     |--------------------------------------------------------------------------
     */
    
    $submail->SetSubject('test SDK');
    
    /*
     |可选参数
     |--------------------------------------------------------------------------
     |设置邮件模板标识
     |--------------------------------------------------------------------------
     */
    
    $submail->SetProject('xxxxxxx');

    /*
     |可选参数
     |--------------------------------------------------------------------------
     |添加文本变量
     |示例为您的模板中包含@var(name)和@var(age)文本变量，以下AddVar方法将替换 @var(name)为leo,@var(age)为32
     |可重复调用
     |--------------------------------------------------------------------------
     */
    
    $submail->AddVar('name','leo');
    $submail->AddVar('age','32');
    
    /*
     |可选参数
     |--------------------------------------------------------------------------
     |添加超链接变量
     |示例为您的模板中包含@link(developer)和@link(store)超链接变量，以下AddLink方法将替换 @var(developer)为http://submail.cn/chs/developer,@var(store)为http://submail.cn/chs/store
     |可重复调用
     |如果您使用HTML代码编辑的模板，您需要在申明超链接的 A 标签内使用 var:// 协议, 即 <a href="var://@link(developer)">超链接</a>
     |--------------------------------------------------------------------------
     */
    
    $submail->AddLink('developer','http://submail.cn/chs/developer');
    $submail->AddLink('store','http://submail.cn/chs/store');
    
    /*
     |可选参数
     |--------------------------------------------------------------------------
     |设置自定义邮件头指令
     |可重复调用
     |--------------------------------------------------------------------------
     */
    
    $submail->AddHeaders('X-Accept','zh-cn');
    $submail->AddHeaders('X-Mailer','my App');
    
    /*
     |可选参数
     |--------------------------------------------------------------------------
     |设置是否异步发送
     |--------------------------------------------------------------------------
     */
    
    $submail->setAsynchronous(false);
    
    /*
     |调用 xsend 方法发送邮件
     |--------------------------------------------------------------------------
     */
    
    $xsend=$submail->xsend();
    
    /*
     |打印服务器返回值
     |--------------------------------------------------------------------------
     */
    
    print_r($xsend);
