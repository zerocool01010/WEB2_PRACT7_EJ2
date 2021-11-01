<ul>
{foreach from=$cleaning item=$item}
    <li>{$item->nombre}</li>
    <li>{$item->descripcion}</li>
    <li>{$item->precio}</li>
{/foreach}
<ul>