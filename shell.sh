
# author:dongzhihong
# mail:244013508@qq.com
# time: 2018-5-25 12:44:44
#
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



