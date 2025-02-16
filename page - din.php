<?php
/**
* 登录页面
*
* @package custom
* 该 PHP 文件用于构建一个登录页面，包含了页面布局、样式引入、表单处理以及相关的页面逻辑等内容。
*/

// 引入公共的 PHP 文件，可能包含一些常用的函数、配置等，供当前页面使用
include 'libs/common.php'; 

// 如果没有定义 '__TYPECHO_ROOT_DIR__' 这个常量，则直接退出脚本执行，通常用于确保在正确的 Typecho 框架环境下运行
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>

<?php $this->need('header.php');?>
<!-- 通过内联样式隐藏顶部栏（top-bar）和网站页脚（site-footer），可能是为了让登录页面更简洁专注于登录功能 -->
<style>.top-bar,.site-footer{ display:none; }</style>
<?php 
// 判断当前用户是否已经登录，如果已经登录
if($this->user->hasLogin()): 
?>
<script language="javascript" type="text/javascript">
// 使用 JavaScript 将页面重定向到网站首页（通过调用获取网站 URL 的相关方法获取具体网址）
window.location.href='<?php $this->options->siteUrl();?>';
</script>  
<?php endif;?>

<!-- 设置页面 body 的背景，背景颜色为 #E7EBF0，并使用 stcdn 函数结合主题 URL 设置背景图片的路径 -->
<style>
body { background: #E7EBF0 url(<?php echo stcdn($this->options->themeUrl);?>/src/images/bg-1.jpg); } 
</style>
<!-- 设置弹出框（popup）的 z-index 为 999，提高其显示层级，确保在页面中能正确显示在合适的层次上 -->
<style>
.popup{ z-index: 999!important;}
</style>
<!-- 引入自定义的用于认证相关的 CSS 文件，来设置登录页面的样式 -->
<link rel="stylesheet" href="<?php echo stcdn($this->options->themeUrl);?>/src/css/auth.css">

<div class="lowin" >
   
        
        <div class="lowin-wrapper">
            <div class="lowin-box lowin-login">
                <div class="lowin-box-inner">
                    <!-- 这里有一个默认隐藏的 div，类型为 typecho-login，具体用途可能要结合框架其他部分来看，目前从代码看暂未启用显示功能 -->
                    <div class="typecho-login" style="display: none;"></div>
                    <!-- 定义登录表单，设置表单提交的 action 地址（通过调用相关配置方法获取登录处理的 URL）以及提交方法为 post -->
                    <form action="<?php $this->options->loginAction()?>" method="post" name="login" id="login-form">
                        <!-- 为表单添加一个 id 属性，方便后续通过 JavaScript 等方式更方便地操作表单 -->
                        
                        <!-- 隐藏域，用于传递一个 referer 参数，值为网站首页的 URL，可能用于记录登录前的来源页面等用途 -->
                        <input type="hidden" name="referer" value="<?php $this->options->siteUrl();?>">
                        <div class="form-header">
                            <h2>用户登录</h2>
                        </div>
                        <!-- 将原有的 <p> 用户登录 </p> 改为更语义化的 <div> 包裹的标题部分 -->
                        <div class="form-group lowin-group">
                            <!-- 账号/邮箱输入框的标签，包含一个图标，并且有一个“Sign in?”的链接，可能用于回到登录页面（目前链接指向 "#"，可能后续需要完善功能） -->
                            <label for="name" class="input-label"><i class="ri-account-box-line ri-lg"></i> 账号/邮箱 <a href="#" class="login-back-link">Sign in?</a></label>
                            <!-- 为 label 标签添加 for 属性，关联对应的输入框 -->
                            
                            <!-- 输入账号/邮箱的文本输入框，设置了自动完成类型为“username”以及占位提示文字，并且设置为必填项 -->
                            <input type="text" class="lowin-input" id="name" name="name" autocomplete="username" placeholder="请输入邮箱/账号" required>
                        </div>
                        <div class="form-group lowin-group password-group">
                            <label for="password" class="input-label"><i class="ri-lock-line ri-lg"></i> 密码</label>
                            <!-- 为 label 标签添加 for 属性，关联对应的输入框 -->
                            
                            <!-- 输入密码的文本输入框，自动完成类型设置为“current-password”，有占位提示文字，同样为必填项 -->
                            <input type="password" class="lowin-input" id="password" name="password" autocomplete="current-password" placeholder="请输入密码" required/>
                        </div>
                        <div class="form-group">
                            <!-- 登录按钮，点击后将提交表单进行登录操作 -->
                            <button type="submit" class="lowin-btn login-btn">
                                登录
                            </button>
                        </div>

                        <div class="text-foot">
                            <!-- 提示文字，提供注册和忘记密码的链接，注册链接根据配置（rewrite 等相关配置）拼接出正确的注册页面 URL，忘记密码链接指向特定的忘记密码页面 -->
                            还没有一个帐号? <a href="<?php $this->options->siteUrl();?><?php if ($this->options->rewrite==0):?>index.php/<?php endif;?><?php $this->options->zhuce();?>.html" class="register-link">注册</a> or   <a href="<?php $this->options->siteUrl();?>Deng/forgot" class="forgot-link">忘记密码?</a>
                        </div>
                    
                    </form>
                </div>
            </div>


        </div>

    </div>


<?php $this->need('footer.php');?>

<!-- 引入用于弹出框相关的 CSS 文件，可能用于登录页面中某些弹出提示等样式设置 -->
<link rel="stylesheet" href="<?php echo stcdn($this->options->themeUrl);?>/src/css/popup.css">
<?php
// 引入公共的 JavaScript 文件，可能包含一些页面通用的 JavaScript 功能函数等
require_once("libs/common-js.php");
?>