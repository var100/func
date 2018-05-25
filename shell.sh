########################################################################
# author:dongzhihong
# mail:244013508@qq.com
# time: 2018-5-25 12:44:44
###############腾讯云服务器centos7.4 64bit yum install nginx#############
# 条件用户要用root用户权限
# 第一步添加nginx 到yum源
sudo rpm -Uvh http://nginx.org/packages/centos/7/noarch/RPMS/nginx-release-centos-7-0.el7.ngx.noarch.rpm

# 安装nginx 用yum命令从Nginx源服务器中获取来安装Nginx
sudo yum install -y nginx

# 启动Nginx 
sudo systemctl start nginx.service
# 下面命令也可启动
# sudo nginx
# sudo nginx -s start

# 用IP访问站点

# 设置开机自动启动
sudo systemctl enable nginx.service

# 说明 systemctl stop nginx.service 关不了ngix 开启的, 但ngix -s stop 却能关systemctl 开启的nginx服务

# Nginx配置信息
# 网站文件存放默认目录
# /usr/share/nginx/html

# 网站默认站点配置
# /etc/nginx/conf.d/default.conf

# 自定义Nginx站点配置文件存放目录
# /etc/nginx/conf.d/

# Nginx全局配置
# /etc/nginx/nginx.conf

########################################################################


































#######################centos6.5/7.3/7.4 install nginx##################
yum install -y wget  
yum install -y vim-enhanced  
yum install -y make cmake gcc gcc-c++
#
# 设置nginx版本
wget -c -O nginx.tar.gz http://nginx.org/download/nginx-1.6.2.tar.gz
tar -zxvf nginx.tar.gz -C /usr/local/
#
# 安装依赖
yum install -y pcre pcre-devel
yum install -y zlib zlib-devel
yum install -y openssl openssl-devel
cd /usr/local/ && ./configure --prefix=/usr/local/nginx
make && make install
#
# 启动
/usr/local/nginx/sbin/nginx
#
# 查看
ps -ef | grep nginx
#
#关闭
# /usr/local/nginx/sbin/nginx -s stop
# 热启动
# /usr/local/nginx/sbin/nginx -s reload



