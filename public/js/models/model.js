var Model = function($args, $className) {
  obj='';
  $.each( $args, function( key, value ) {
    value = value || null;
    obj = obj +  key + ':' + value +', ';

  });
  obj = obj.substring(0, obj.length - 2);
  obj = '{ '+$className+' : {'+obj+'}}';
  this.obj =obj ;
  //console.log(JSON.parse({'teste':'teste'}));
}

Model.prototype.getObject = function()
{
  return this.obj;
};
