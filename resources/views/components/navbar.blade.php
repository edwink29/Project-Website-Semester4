<nav class="sticky top-0 w-full border-b border-gray-500 bg-gray-900 p-4 px-6 z-10">
  <div class="flex justify-between items-center">
    <h1 class="text-lg font-semibold text-white">Admin -> Dashboard</h1>
    <div x-data="{open: false}" class="flex items-center gap-3">
      <button id="toggle-dark-mode" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white">
        <i class="bi bi-moon-stars-fill"></i>
      </button>
      <div class="flex gap-3 items-center">
        <h3 class="text-white hidden md:block">Syalia Ayu Ambar Wati</h3>
        <img @click="open = !open" src="/images/profil.jpg" class="w-10 hover:border-2 cursor-pointer border-white border-2 hover:border-gray-300 active:border-gray-400 h-10 rounded-full object-cover" alt="User">
      </div>
      <div x-show="open" class="absolute top-18 right-7 p-2 rounded-md bg-gray-800 text-white font-semibold">
        <ul class="">
          <li>
            <a class="p-3 hover:bg-slate-600 active:bg-slate-700 rounded-sm w-full block" href="/admin/profil"><i class="bi bi-person-circle mr-3"></i>Profile</a>
          </li>
          <li>
            <a class="p-3 hover:bg-slate-600 active:bg-slate-700 rounded-sm w-full block" href="/admin/ubahPassword"><i class="bi bi-gear-fill mr-3"></i>Ubah Password</a>
          </li>
          <li>
            <a class="p-3 hover:bg-slate-600 active:bg-slate-700 rounded-sm w-full block" href="/login"><i class="bi bi-box-arrow-left mr-3"></i>Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>