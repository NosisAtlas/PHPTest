<h2>Temoignages List</h2>
<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Titre</th>
                <th scope="col">Message</th>
                <th scope="col">Date</th>
                <th scope="col">Statut</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($temoignagesAll as $temoignage)
            <tr data-id="{{ $temoignage->id }}">
                <th scope="row">{{ $temoignage->id }}</th>
                <td class="media">
                    @if($temoignage->image === null)
                    <img class="img-thumbnail" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg" alt="">
                    @else
                    <img class="img-thumbnail" src="{{ asset($temoignage->image) }}" alt="{{ $temoignage->titre }}">
                    @endif
                </td>
                <td>{{ $temoignage->titre }}</td>
                <td>{{ $temoignage->message }}</td>
                <td>{{ $temoignage->created_at->format('Y-m-d') }}</td>
                <td>{{ $temoignage->statut }}</td>
                <td class="customHandleBtns">
                    @if ($temoignage->statut == "en_attente" )
                    <form class="customHandleForm" action="{{ route('temoignage.approve', ['id' => $temoignage->id]) }}" method="POST">
                        @csrf
                        <button class="customHandleBtn" type="submit"><i class="bi bi-plus-circle-fill customColor"></i></button>
                    </form>
                    <form class="customHandleForm" action="{{ route('temoignage.reject', ['id' => $temoignage->id]) }}" method="POST">
                        @csrf
                        <button class="customHandleBtn" type="submit"><i class="bi bi-x-circle customColor"></i></button>
                    </form>
                    @elseif($temoignage->statut == "rejete")
                        <form class="customHandleForm" action="{{ route('temoignage.approve', ['id' => $temoignage->id]) }}" method="POST">
                            @csrf
                            <button class="customHandleBtn" type="submit"><i class="bi bi-plus-circle-fill customColor"></i></button>
                        </form>
                        <form class="customHandleForm" action="{{ route('temoignage.destroy', ['id' => $temoignage->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="customHandleBtn" type="submit"><i class="bi bi-trash customColor"></i></button>
                        </form>
                    @else
                    <form class="customHandleForm" action="{{ route('temoignage.reject', ['id' => $temoignage->id]) }}" method="POST">
                        @csrf
                        <button class="customHandleBtn" type="submit"><i class="bi bi-x-circle customColor"></i></button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
