#同济电费提醒
##更新：
更新API
##配置环境
- Ubuntu 14.10
- LAMP
- Postfix

##使用说明
1. `index.php`和`mail.php`丢到`www`服务器目录下，我放到了
`/var/www/html/Electricity`
2. 测试，打开浏览器，输入
`localhost/Electricity/`
返回电费
3. 周期性工作
`crontab -e`进入vim编辑器，最后一行添加
```
crontab 0 12 * * * curl localhost/Electricity/
```
每天中午12点服务器会查询电费，小于10度电就会发邮件
PS:`crontab`是Linux下例行性工作调度的命令
