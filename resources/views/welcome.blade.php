<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo meetup</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container" id="demoApp">
        <h1>Welcome to Meetup</h1>
        {{-- <pre>@{{ [$data.column, $data.reverse] | json }}</pre> --}}

        <div class="well">
            <input type="text" class="form-control" v-model="filterTerm">
        </div>

        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>
                        <i class="fa fa-fw fa-sort"
                        v-class="fa-sort-amount-asc:column == 'name' && reverse, fa-sort-amount-desc:column == 'name' && !reverse"
                        ></i>
                        <a href="#" v-on="click:sort($event, 'name')">Nome</a>
                    </th>
                    <th>
                        <i class="fa fa-fw fa-sort"
                        v-class="fa-sort-amount-asc:column == 'city' && reverse, fa-sort-amount-desc:column == 'city' && !reverse"
                        ></i>
                        <a href="#" v-on="click:sort($event, 'city')">Cidade</a>
                    </th>
                    <th>
                        <i class="fa fa-fw fa-sort"
                        v-class="fa-sort-amount-asc:column == 'state' && reverse, fa-sort-amount-desc:column == 'state' && !reverse"
                        ></i>
                        <a href="#" v-on="click:sort($event, 'state')">Estado</a>
                    </th>
                    <th>
                        <i class="fa fa-fw fa-sort"
                        v-class="fa-sort-amount-asc:column == 'country' && reverse, fa-sort-amount-desc:column == 'country' && !reverse"
                        ></i>
                        <a href="#" v-on="click:sort($event, 'country')">País</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-repeat="cervejaria:cervejarias | orderBy column reverse | filterBy filterTerm">
                    <td>@{{ cervejaria.name }}</td>
                    <td>@{{ cervejaria.city }}</td>
                    <td>@{{ cervejaria.state }}</td>
                    <td>@{{ cervejaria.country }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>