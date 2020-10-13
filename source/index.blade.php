@extends('_layouts.master')

@section('body')
<h2 class="text-2xl font-bold my-2">About Me</h2>
<div class="flex justify-between space-x-6 items-start">
    <p>
        This is a Hugo based resume template. You can find the full source code on
        <a href="#" class="hover:underline text-red-500">Github.</a>
    </p>
    <figure>
        <img class="w-24 h-24 rounded-full" src="https://themes.gohugo.io//theme/hugo-researcher/avatar.jpg"
            alt="avatar">
    </figure>
</div>
<h2 class="text-2xl font-bold mb-2 -mt-10">Research Interest</h2>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam finibus ipsum ac erat aliquam dapibus. Vestibulum
    vehicula placerat ex, a consectetur odio pharetra quis. Mauris id urna ante. Fusce pharetra diam ac nisi aliquet,
    vel egestas ex iaculis. Pellentesque laoreet cursus tellus sed pellentesque. Praesent a rhoncus elit. Nunc ipsum
    nisl, consequat sit amet pretium quis, gravida id ipsum.
</p>
<h2 class="text-2xl font-bold my-2">Publications</h2>
<p>In chronological order:</p>
<ol class="my-2">
    <li>[1] F.Bar, J.Doe: Effects of having a placeholder of a name</li>
    <li>[2] S.Holmes, J.Watson: Consequences of living with a sociopath in London</li>
</ol>
@endsection