@extends('layout.master')

@section('title', 'Data')

@section('content')
<table class="table table-bordered table-hover table-condensed">
    <thead><tr><th title="Field #1">id</th>
    <th title="Field #2">reason</th>
    <th title="Field #3">from</th>
    <th title="Field #4">to</th>
    <th title="Field #5">stu_id</th>
    </tr></thead>
    <tbody><tr>
    <td align="right">1</td>
    <td>Sickness</td>
    <td>2020-12-07</td>
    <td>2020-12-10</td>
    <td align="right">2975</td>
    </tr>
    <tr>
    <td align="right">2</td>
    <td>Sickness</td>
    <td>2020-12-17</td>
    <td>2020-12-17</td>
    <td align="right">2975</td>
    </tr>
    </tbody></table>
@endsection
