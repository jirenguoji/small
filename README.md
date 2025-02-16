# 核心组织结构
├── index.php                # 主入口文件
├── functions.php            # 核心功能函数
├── header.php              # 页面头部
├── footer.php              # 页面底部
├── sidebar.php             # 侧边栏
│
├── core/                   # 核心功能目录
│   ├── theme.php          # 主题核心
│   ├── oin.php           
│   ├── get_int.php
│   └── setcate.php        # 分类设置
│
├── libs/                   # 功能库目录
│   ├── member.php         # 会员相关
│   ├── writepost.php      # 文章操作
│   └── Contents.php       # 内容处理
│
└── assets/                 # 静态资源
    ├── seo.php            # SEO相关
    ├── og.php             # Open Graph
    └── 404set.php         # 404页面
# 页面模板结构
├── post.php               # 文章页面
├── page.php              # 独立页面
│   ├── page-liuy.php     # 留言页
│   ├── page-ylink.php    # 友链页
│   ├── page-onener.php   # 会员列表
│   ├── page-hot.php      # 热门文章
│   ├── page-dup.php      # 注册页
│   └── page-din.php      # 登录页
│
├── category.php          # 分类页面
│   ├── tuwen.php        # 图文分类
│   ├── shipin.php       # 视频分类
│   └── wenzi.php        # 文字分类
│
├── author.php           # 作者页面
├── Contribution.php     # 投稿功能
├── Contedit.php        # 文章编辑
└── 404.php             # 错误页面
