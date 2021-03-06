#Swoft AOP记录用户操作日志 示例


#### 下载安装
 ```bash
 git clone https://github.com/nilocsu/swoft-aop-log.git
 cd swoft-aop-log
 composer install
```

在数据库中创建一张sys_log表
```sql
DROP TABLE IF EXISTS `t_log`;
CREATE TABLE `t_log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '日志ID',
  `username` varchar(50) DEFAULT NULL COMMENT '操作用户',
  `operation` text COMMENT '操作内容',
  `time` decimal(11,0) DEFAULT NULL COMMENT '耗时',
  `method` text COMMENT '操作方法',
  `params` text COMMENT '方法参数',
  `ip` varchar(64) DEFAULT NULL COMMENT '操作者IP',
  `location` varchar(50) DEFAULT NULL COMMENT '操作地点',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1839 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
```
实体已存在，不用再创建

##### 配置数据连接
在.env中配置数据库连接
```dotenv
DB_DSN =
DB_USERNAME =
DB_PASSWORD =
```

##### 执行
启动项目，分别访问：

http://localhost:18306/test/one?type=test1

http://localhost:18306/test/two

http://localhost:18306/test/three
