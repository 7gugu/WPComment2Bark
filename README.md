# WPComment2Bark
<!-- wp:heading -->
<h2>背景 🏞</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>最近大半年都在搞实习和雅思，其实没做多少实用的工具出来，有点手痒痒了。因此接着博客重建的契机，动手搞了一个评论信息推送的小插件。</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>思考 🤔</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3>技术指标:</h3>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true} -->
<ol><li>高触达率 🚀</li><li>开箱即用 📦</li><li>高度安全 🔐</li></ol>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3>解决方案:</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>1. 邮件推送</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>原来的推送方式就是通过Email的形式来推送，有可能会出现消息推送不及时或者被拒信，无法满足高触达率的技术要求，故摒弃这种推送方式。</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>2. Server酱</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Server酱年初也因为各种外部原因，降级成了企业微信推送，其实不是特别方便，用户还得去装一个企业微信，然后配置Bot，再去配置APIKEY。对于我们做开发的用户来说，已经是挺繁琐的步骤了，对于普通用户而言简直就是噩梦。无法满足开箱即用的要求，故放弃。</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>3. Bark</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>最后我将目光投到了Bark身上，Bark是V站的一个dalao搞的一套利用Apple消息推送机制做的Web信息推送框架。Bark也同时满足我们三项技术要求: </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>1. 高触达率</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>借助Apple推送机制，我们甚至可以在息屏的情况下，都能正常收到推送消息。无视任何垃圾回收机制，绝对在线。</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>2. 开箱即用</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>用户只要下载Bark客户端，博客安装插件，配置插件，即可投入实际使用。</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>3. 高度安全</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Bark提供免费服务器的同时，也提供了源代码供用户进行审查。如果是对于隐私比较敏感的用户，还能选择通过Docker部署自己的私有推送服务器。</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>综合上述优点，我选择了使用Bark作为消息推送的核心功能支持。</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>作用 🏄🏼‍♀️</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>每当有人评论你的文章时，可以推送到你的 Bark App。</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>配置指南 🧭</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>1. 从AppStore下载Bark客户端</p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"center","id":1857,"sizeSlug":"large","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-large"><img src="https://7gugu.com/wp-content/uploads/2021/09/1831632156718_.pic_hd-1-473x1024.png" alt="" class="wp-image-1857"/></figure></div>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>2. 上传 &amp; 安装插件</p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"center","id":1845,"sizeSlug":"large","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-large"><img src="https://7gugu.com/wp-content/uploads/2021/09/1841632157580_.pic_hd-1024x542.jpg" alt="" class="wp-image-1845"/></figure></div>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>3. 配置推送链接</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>首先从客户端上复制出推送API和API密钥</p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"center","id":1853,"sizeSlug":"large","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-large"><img src="https://7gugu.com/wp-content/uploads/2021/09/1861632158540_.pic_hd-496x1024.png" alt="" class="wp-image-1853"/></figure></div>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>第二步，切换到博客后台，依次点击【设置-&gt;讨论】，滚动到底部，找到【Bark推送设置】</p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"center","id":1851,"sizeSlug":"large","linkDestination":"none"} -->
<div class="wp-block-image"><figure class="aligncenter size-large"><img src="https://7gugu.com/wp-content/uploads/2021/09/1871632158865_.pic_hd-1024x543.jpg" alt="" class="wp-image-1851"/></figure></div>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>至此就完成了全部配置工作，只要有新的评论被发出，就会调用API想您推送消息。</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>插件仓库 ⛺️</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="https://github.com/7gugu/WPComment2Bark">https://github.com/7gugu/WPComment2Bark</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>点击【Code -&gt; Download ZIP】下载压缩包后，按照配置指南，一步一步的安装即可。</p>
<!-- /wp:paragraph -->

## 联系方式

1. 博客: [https://www.7gugu.com](https://www.7gugu.com)
2. 邮箱: gz7gugu@qq.com

## issue

如果有问题，请直接发issue，我看到就会及时处理的了。
