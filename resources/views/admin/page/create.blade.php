@php
$action = isset($page) ? route('admin.page.update',$page->id) : route('admin.page.store');
@endphp
@extends('admin.layouts.include.master')
<x-layout.create title="Page" :data="$page??null" :action="$action" :backroute="route('admin.page.index')">
    <x-form.input name="title" lable="Title *" :value="__($page->title ?? old('title'))"/>
    <x-form.input name="slug" lable="Slug *" :value="__($page->slug ?? old('slug'))"/>
    <x-form.input name="meta_title" lable="Meta Title *" :value="__($page->meta_title ?? old('meta_title'))"/>
    <x-form.input name="meta_keyword" lable="Meta Keyword *" :value="__($page->meta_keyword ?? old('meta_keyword'))"/>
    <x-form.input name="meta_description" lable="Meta Description *" :value="__($page->meta_description ?? old('meta_description'))"/>
    <x-form.input name="meta_robots" lable="Meta Robots *" :value="__($page->meta_robots ?? old('meta_robots'))"/>
</x-layout.create>
@section('script')
      <x-source_url.datatable_required_js />
@endsection
