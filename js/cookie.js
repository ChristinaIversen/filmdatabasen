function GetCookie(name) {
          var arg=name+"=";
          var alen=arg.length;
          var clen=document.cookie.length;
          var i=0;
          while (i<clen) {
            var j=i+alen;
            if (document.cookie.substring(i,j)==arg)
              return "here";
            i=document.cookie.indexOf(" ",i)+1;
            if (i==0) break;
          }
          return null;
        }
        var visit=GetCookie("VilkårForAnvendelse");
        if (visit==null){
           alert("Vi anvender cookies, UDEN MÆLK! Der er ingen vilkår for anvendelse på denne side! Have fun!");
           var expire=new Date();
           expire=new Date(expire.getTime()+7776000000);
           document.cookie="VilkårForAnvendelse=here; expires="+expire;
        }