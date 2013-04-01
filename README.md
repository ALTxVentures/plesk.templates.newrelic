ABOUT
=====
This custom template will automatically register each of the PHP running sites on a shared server as individual applications (using the domain name) on NewRelic.

DEPLOYMENT
==========
1. Copy these template set into ```/usr/local/``` folder. Making the new custom scripts available at ```usr/local/psa/admin/conf/templates/custom```.
2. Ask Plesk to regenerate all the scripts. Parallels's offical [document](http://download1.parallels.com/Plesk/PP11/11.0/Doc/en-US/online/plesk-linux-advanced-administration-guide/index.htm?fileName=68693.htm) recommend ```/usr/local/psa/admin/bin/httpdmng --reconfigure-all``` to be called as root via terminal / ssh.


RESOURCES
=========
* [NewRelic Per-directory INI Settings](https://newrelic.com/docs/php/per-directory-settings)
* [Changing Virtual Hosts Settings Using Configuration Templates](http://download1.parallels.com/Plesk/PP11/11.0/Doc/en-US/online/plesk-linux-advanced-administration-guide/index.htm?fileName=68693.htm)
* [Apache Configuration Variables](http://download1.parallels.com/Plesk/PP11/11.0/Doc/en-US/online/plesk-linux-advanced-administration-guide/index.htm?fileName=68713.htm)
* [Configuration Templates Structure](http://download1.parallels.com/Plesk/PP11/11.0/Doc/en-US/online/plesk-linux-advanced-administration-guide/index.htm?fileName=68820.htm)

NOTES
=====
* run ```/usr/local/psa/admin/bin/httpdmng --reconfigure-all``` after changes are made to recompile all existing configs