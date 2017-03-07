./generator nginx --bind_domain=admin.host.dev.devopbuild.com --proxy_domain=http://admin.wh.host.dev.local:8000 --output_file=/etc/nginx/sites-enabled/admin.dev.conf
./generator nginx --bind_domain=dating.host.dev.devopbuild.com --proxy_domain=http://dating.wh.host.dev.local:8000 --output_file=/etc/nginx/sites-enabled/dating.dev.conf
./generator nginx --bind_domain=ot.host.dev.devopbuild.com --proxy_domain=http://ot.wh.host.dev.local:8000 --output_file=/etc/nginx/sites-enabled/ot.dev.conf
./generator nginx --bind_domain=partners.host.dev.devopbuild.com --proxy_domain=http://partners.wh.host.dev.local:8000 --output_file=/etc/nginx/sites-enabled/partners.dev.conf
#for stg
./generator nginx --bind_domain=admin.host.stg.devopbuild.com --proxy_domain=http://admin.wh.host.stg.local:8000 --output_file=/etc/nginx/sites-enabled/admin.stg.conf
./generator nginx --bind_domain=dating.host.stg.devopbuild.com --proxy_domain=http://dating.wh.host.stg.local:8000 --output_file=/etc/nginx/sites-enabled/dating.stg.conf
./generator nginx --bind_domain=ot.host.stg.devopbuild.com --proxy_domain=http://ot.wh.host.stg.local:8000 --output_file=/etc/nginx/sites-enabled/ot.stg.conf
./generator nginx --bind_domain=partners.host.stg.devopbuild.com --proxy_domain=http://partners.wh.host.stg.local:8000 --output_file=/etc/nginx/sites-enabled/partners.stg.conf