#同济电费提醒
##更新：
更新API
##配置环境
- Ubuntu 14.10

##使用说明
1. 将`query.py`和`sendmail.py`放到任意一个文件夹
2. 周期性工作
`crontab -e`进入vim编辑器，最后一行添加
```
crontab 0 12 * * * python path/to/query.py
```
每天中午12点服务器会查询电费，小于10度电就会发邮件
PS:`crontab`是Linux下例行性工作调度的命令

