<nav>
  <ul class="flex space-x-4 text-slate-500">
    <li>
      <a href="/">Home</a>
    </li>
    @foreach ($links as $label => $href)
    <li>
      <a href="{{$href}}">{{$label}}</a>
    </li>
    @endforeach

  </ul>
</nav>

{{-- $linksが['Google' => 'https://www.google.com', 'Yahoo' => 'https://www.yahoo.com']であった場合、以下のようなHTMLが出力されます： --}}
{{-- 
<li>
  <a href="https://www.google.com">Google</a>
</li>
<li>
  <a href="https://www.yahoo.com">Yahoo</a>
</li>
 --}}