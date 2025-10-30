@foreach ($mobil as $item)
    <tr class="bg-bgPrimary border-b border-bgSecondary/20 hover:bg-bgSecondary/10">
        <th scope="row" class="px-6 py-4 font-medium text-txtPrimary/80 whitespace-nowrap">
            {{ $item->id_mobil }}
        </th>
        <td class="px-6 py-4">
            {{ $item->nama_mobil }}
        </td>
        <td class="px-6 py-4">
            <img src="{{ Vite::asset('img/' . $item->foto_mobil) }}" alt="{{ $item->nama_mobil }}" width="120">
        </td>
        <td class="px-6 py-4">
            {{ $item->jenis_mobil }}
        </td>
        <td class="px-6 py-4">
            {{ $item->tipe_mobil }}
        </td>
        <td class="px-6 py-4">
            {{ $item->seri_mobil }}
        </td>
        <td class="px-6 py-4">
            {{ $item->tahun_rilis }}
        </td>
        <td class="px-6 py-4">
            {{ $item->harga }}
        </td>
        <td class="px-6 py-4">
            {{ $item->stok }}
        </td>
        <td class="px-6 py-4">
            {{ $item->deskripsi }}
        </td>
        <td class="px-6 py-4">
            {{ $item->warna }}
        </td>
        <td class="px-6 py-4">
            {{ $item->mesin }}
        </td>
        <td class="px-6 py-4">
            {{ $item->seat }}
        </td>
        <td class="px-6 py-4">
            {{ $item->drivetrain }}
        </td>
        <td class="px-6 py-4">
            {{ $item->tenaga }}
        </td>
        <td class="px-6 py-4">
            {{ $item->transmisi }}
        </td>
    </tr>
@endforeach
