!function(e){function t(o){if(a[o])return a[o].exports;var n=a[o]={i:o,l:!1,exports:{}};return e[o].call(n.exports,n,n.exports,t),n.l=!0,n.exports}var a={};return t.m=e,t.c=a,t.i=function(e){return e},t.d=function(e,t,a){Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:a})},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s=2)}([function(e,t){$(".datepicker").pickadate({selectMonths:!0,selectYears:5}),$("select").material_select(),$.ajaxSetup({headers:{"X-CSRF-TOKEN":document.querySelector('meta[name="csrf-token"]').content}}),$(document).on("click","a[data-delete]",function(){if(confirm("確定要刪除？")){var e=$(this);$.ajax(e.data("url"),{method:"DELETE"}).done(function(){e.data("delete").length>0&&e.closest(e.data("delete"))[0].remove(),Materialize.toast("刪除成功",4e3,"green")})}}),function(e,t,a,o,n,r,c){e.GoogleAnalyticsObject=n,e[n]=e[n]||function(){(e[n].q=e[n].q||[]).push(arguments)},e[n].l=1*new Date,r=t.createElement(a),c=t.getElementsByTagName(a)[0],r.async=1,r.src=o,c.parentNode.insertBefore(r,c)}(window,document,"script","https://www.google-analytics.com/analytics.js","ga"),ga("create","UA-65962475-3","auto"),ga("send","pageview")},function(e,t){var a=document.getElementById("zinc-analytics");null!==a&&$.get("/zinc/manage/analytics/data",function(e){new Chart(a.getContext("2d"),{type:"line",data:{labels:e.date,datasets:[{label:"Visitors",backgroundColor:"rgba(220,220,220,0.2)",borderColor:"rgba(220,220,220,1)",pointBackgroundColor:"rgba(220,220,220,1)",pointBorderColor:"#fff",data:e.visitors},{label:"Page Views",backgroundColor:"rgba(151,187,205,0.2)",borderColor:"rgba(151,187,205,1)",pointBackgroundColor:"rgba(151,187,205,1)",pointBorderColor:"#fff",data:e.pageViews}]}})})},function(e,t,a){a(0),e.exports=a(1)}]);