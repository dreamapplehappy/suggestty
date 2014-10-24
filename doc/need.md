# 需求分析
+ 提出提议，并能评论
+ 对每个提议和评论能顶或踩直观显示
+ 用户有一个 声望数值（参照segmentfault）
+ 文件上传
+ 草稿缓存
+ 有新的topic以及回复会有消息通知（邮件？）

# database
## user
+ id
+ email
+ name
+ remember_token
+ topic_count
+ reply_count
+ timestamps

##topic
+ id
+ title
+ body
+ user_id
+ reply_count
+ vote_count
+ timestamp

##reply
+ id
+ body
+ topic_id
+ user_id
+ timestamp


##todo
+ 登入后的跳转到前页面