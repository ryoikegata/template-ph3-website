


<ul role="list" class="divide-y divide-gray-100">
@foreach ($users as $user)
  <li class="flex justify-between gap-x-6 py-5">
    <div class="flex gap-x-4">
      <div class="min-w-0 flex-auto">
        <p class="text-sm font-semibold leading-6 text-gray-900">
          {{ $user->name }}
        </p>
      </div>
    </div>
  </li>
  @endforeach
</ul>
