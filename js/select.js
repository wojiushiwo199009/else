//全选效果
selchk=function(itemname)
{
    //var flag=obj.checked;
    $("input[name='"+itemname+"']").each(function()
	{ 
		if(this.checked==true)
		{
			this.checked=false;
		}
		else
		{
			this.checked=true;	
		}
    }); 
}
//判断是否有选中的
ischeckedItems=function(itemname)
{
    var idstr="";
    $("input[name='"+itemname+"']").each(function()
	{ 
        if(this.checked){
			if(idstr=="")
			{
				idstr=this.value;
			}
			else
			{
				idstr+=","+this.value;
			}
        }
    }); 
    if(idstr=="")
	{
        alert("没有任何选中的项！");
    }
    return idstr;
}
//操作选中项
chkallurl=function(itemname,file,msg)
{
   var idstr=ischeckedItems(itemname);
   if(idstr!="")
   {
        if(confirm(msg))
		{
			window.location=file+"&id="+idstr;
       }
   }
}
