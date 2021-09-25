<?php

/*
Plugin Name: Comment2Bark
Plugin URI: https://7gugu.com/index.php/2021/09/21/wp%e6%8f%92%e4%bb%b6-wpcomment2bark/
Description:  Wordpress新评论Bark通知
Version: 1.0.0
Author: 7gugu
Author URI: https://www.7gugu.com/
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {License URI}.
*/

function comment2bark_initFunction()
{
  // 为 讨论 页面注册新设置
  register_setting('discussion', 'barkLink');

  // 在讨论读页面上注册新分节
  add_settings_section(
    'comment2bark_settings_section',
    'Bark API推送配置',
    'comment2bark_settings_section_cb',
    'discussion'
  );

  // 讨论页面中，在 comment2bark_settings_section 分节上注册新设置
  add_settings_field(
    'comment2bark_settings_field',
    'Bark 推送链接',
    'comment2bark_settings_field_cb',
    'discussion',
    'comment2bark_settings_section'
  );
}

/**
 * 注册 初始化函数 到 admin_init Action 钩子
 */
add_action('admin_init', 'comment2bark_initFunction');
add_action('wp_insert_comment', 'comment2bark_commentInsertedTrigger', 10, 2);

function comment2bark_commentInsertedTrigger($comment_id, $comment_object)
{
  $setting = get_option('barkLink');
  $title = "您的博客收到了新的评论";
  $content = $comment_object->comment_author . ": " . $comment_object->comment_content;
  if (isset($setting)) {
    $response = wp_remote_get($setting . $title . "/" . $content);
  }
}

/**
 * 回调函数
 */
// 分节内容回调
function comment2bark_settings_section_cb()
{
  echo '
    <p>使用说明: 保存推送服务器的推送链接后, 每当有新的访客发送评论时都会推送到指定的Bark客户端</p>
    <p>下载<a href="https://github.com/Finb/Bark">Bark App</a>获取推送链接 🔗</p>
    <p>范例: https://api.day.app/{APIKEY}/</p>';
}

// 字段内容回调
function comment2bark_settings_field_cb()
{
  // 获取我们使用 register_setting() 注册的字段的值
  $setting = get_option('barkLink');
  // 输出字段
?>
  <input type=text name=barkLink value=<?php echo isset($setting) ? esc_attr($setting) : ''; ?>>
<?php
}
?>
