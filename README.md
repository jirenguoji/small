# 项目简介

> “一支穿云箭，千军万马来相见；万道烽火燃，九州疆土定尘烟 ”  —— 巨人国际


# 组织结构
```plaintext
├── index.php                # 主入口文件，负责初始化应用程序并引导请求
├── functions.php            # 存放核心功能函数，为项目提供各种基础功能支持
├── header.php               # 用于生成页面的头部部分，包含常见的 HTML 头部信息、导航栏等
├── footer.php               # 页面底部部分，通常包含版权信息、备案信息等
├── sidebar.php              # 侧边栏文件，用于展示侧边栏内容，如分类导航、热门文章等
│
├── core/                    # 核心功能目录
│   ├── theme.php            # 主题核心文件，负责处理主题相关的逻辑，如加载主题样式、设置主题布局等
│   ├── oin.php              # 具体功能不明，需根据项目实际代码确定
│   ├── get_int.php          # 具体功能不明，需根据项目实际代码确定
│   └── setcate.php          # 用于分类设置，可能包含分类的添加、编辑、删除等操作
│
├── libs/                    # 功能库目录
│   ├── member.php           # 处理与会员相关的功能，如会员注册、登录、信息修改等
│   ├── writepost.php        # 负责文章操作，如文章的撰写、发布、编辑、删除等
│   └── Contents.php         # 用于内容处理，可能包含对文章内容的格式化、过滤等操作
│
└── assets/                  # 静态资源目录
    ├── seo.php              # 处理 SEO 相关的功能，如设置页面标题、关键词、描述等
    ├── og.php               # 用于处理 Open Graph 协议相关的设置，优化社交媒体分享展示
    └── 404set.php           # 设置 404 页面的相关逻辑和内容
├── post.php                 # 文章详情页面模板，用于展示单篇文章的内容
├── page.php                 # 独立页面的基础模板
│   ├── page-liuy.php        # 留言页，供用户发表留言
│   ├── page-ylink.php       # 友情链接页面，展示网站的友情链接
│   ├── page-onener.php      # 会员列表页面，展示会员相关信息
│   ├── page-hot.php         # 热门文章页面，展示热门文章列表
│   ├── page-dup.php         # 注册页，用于用户注册账号
│   └── page-din.php         # 登录页，供用户登录系统
│
├── category.php             # 分类页面的基础模板
│   ├── tuwen.php            # 图文分类页面，展示图文类别的文章
│   ├── shipin.php           # 视频分类页面，展示视频类别的文章或内容
│   └── wenzi.php            # 文字分类页面，展示纯文字类别的文章
│
├── author.php               # 作者页面，展示作者相关信息及该作者发布的文章
├── Contribution.php         # 投稿功能页面，提供用户投稿的入口和操作
├── Contedit.php             # 文章编辑页面，用于编辑已发布的文章
└── 404.php                  # 错误页面，当用户访问不存在的页面时显示



