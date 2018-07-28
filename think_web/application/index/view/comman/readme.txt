这里的文件是视图中用来引入的模板文件
在具体视图文件中引入语法
{inclue file='comman/1'/}

base.html是所有视图需要继承的模板
在具体视图中语法
{extend name="comman/base" }

在模板中通过
{block name='t1'}
    内容1
{/block}
在具体视图中
使用同样标签
{extend name="comman/base" }
{block name='t1'}
    内容2
{/block}
如果要继承内容
{block name='t1'}
    内容2{__block__}
{/block}


