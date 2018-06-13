1、问题:使用curl获取数据时如果获取的数据过大，则返回null<br>
解决方法:
```
curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0); 
```
或者
```
curl_setopt($ch, CURLOPT_HTTPHEADER, array(''Expect: ''));
```
[参考1](https://www.cnblogs.com/baby123/p/5995459.html)
[参考2](https://blog.csdn.net/jie3595200/article/details/52849282)
[参考3](https://www.cnblogs.com/yjf512/p/5985239.html)
[curl请求参考](https://www.cnblogs.com/xuzhengzong/p/7054959.html)
