-- members

DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id int unsigned auto_increment primary key ,
  email varchar(200) not null default '' comment '用户邮箱，登陆用' ,
  nickname varchar(40) not null default '' comment '昵称，也可以用于登陆',
  encrypted_password varchar(90) not null default ' sha1(password+salt)_salt ',
  created int(10) unsigned not null default '0',
  updated int(10) unsigned not null default '0',
  st tinyint not null default '0' comment '用户状体啊，负数为不正常, 1:普通用户 ,2:vip用户 , 0:未激活用户',
  unique (email),
  unique( nickname ) ,
  index(st)
) engine=innoDB default charset=utf8 comment '用户表';

DROP TABLE IF EXISTS user_active;
CREATE TABLE user_active(
 uid int unsigned not null default '0',
  token varchar(100) not null default '',
  created int unsigned not null default '0',
  unique(uid)
) engine=innoDB default charset=utf8 comment '用户激活表';

DROP TABLE IF EXISTS user_upload_accounts;
CREATE TABLE user_upload_accounts (
  id int unsigned auto_increment primary key ,
  uid int unsigned not null default '0',
  ac_token varchar(100) not null default '',
  created int unsigned not null default '0',
  updated int unsigned not null default '0',
  index(uid)
) engine=innoDB default charset=utf8 comment '用户的账号表';

CREATE TABLE user_tasks(
  id int unsigned auto_increment primary key ,
  uid int unsigned not null default '0',
  hash varchar(100) not null default '',
  task_id int unsigned not null default '0',
  st tinyint not null default '0' comment '',
  created int unsigned not null default '0',
  updated int unsigned not null default '0',
  index(uid) ,
  index(st)
) engine=innoDB default charset=utf8 comment '上传网盘任务表';

DROP TABLE IF EXISTS tasks;
CREATE TABLE tasks (
  id int unsigned auto_increment primary key ,
  hash varchar(100) not null default '' comment 'youtube 的hash',
  qh_level tinyint unsigned not null default '0' comment '清晰度等级 320p 480p 720p 1080p',
  st tinyint not null default '0' comment '状态 0:未开始: -1 被删除 : 1： 抓取ing, 2: 抓取完毕, 3: 上传到 网盘,4:复制给用户的网盘 ',
  created int(10) unsigned not null default '0',
  updated int(10) unsigned not null default '0',
  uid int unsigned not null default '0' comment '用户id',
  index(created) ,
  index(st)
) engine=innoDB default charset=utf8 comment '用户任务表';


DROP TABLE IF EXISTS tasks_gets;
CREATE TABLE tasks_gets (
id int unsigned auto_increment primary key ,
  url varchar(200) not null default '' comment '要抓取的url',
  st tinyint not null default '0' comment ' 0:未开始,1:下载ing ,2:完成, -1 出问题 ',
  err_code varchar(100) not null comment ' 错误代码 ',
  err_content text comment '错误内容',
  index( st ),
  unique (url)
) engine=innoDB default charset=utf8 comment '下载任务表';

DROP TABLE IF EXISTS tasks_upload;
CREATE TABLE tasks_upload (
id int unsigned auto_increment primary key ,
  tasks_get_id int unsigned not null default '0' comment '哪个下载任务的',
  ac_token varchar(200) comment '上传的hash' ,
  account_id int unsigned not null default '0',
  created int(10) unsigned not null default '0',
  updated int(10) unsigned not null default '0',
  upload_path varchar(255) not null default '上传的路径',
  file_md5 varchar(100) not null default '' comment '文件md5',
  index(file_md5),
  index( st )
) engine=innoDB default charset=utf8 comment '上传网盘任务表';

DROP TABLE IF EXISTS tasks_copy;
CREATE TABLE tasks_copy (
id int unsigned auto_increment primary key ,
  uid int unsigned not null default '0' ,
  st tinyint not null default '0',
  ac_token varchar(200) not null default '',
  created int unsigned not null default '0' ,
  updated int unsigned not null default '0' ,
  task_upload_id int unsigned not null default '0',
  copy_path varchar(255),
  index(uid)
) engine=innoDB default charset=utf8 comment '上传网盘任务表';


DROP TABLE IF EXISTS upload_accouts;
CREATE TABLE upload_accouts (
  id int unsigned auto_increment primary key ,
  username varchar(100) not null default '',
  password varchar(100) not null default '',
  total_size bigint unsigned not null default '0' comment '总存储梁',
  left_size bigint unsigned not null default '0' comment '剩余容量',
  ac_token varchar(200) not null default '' comment '访问的token',
  created int unsigned not null default '0',
  updated int unsigned not null default '0',
  st tinyint not null default '0' comment '1:正常 ,-1 被禁用',
  index(st)
) engine=innoDB default charset=utf8 comment '上传账号务表';




