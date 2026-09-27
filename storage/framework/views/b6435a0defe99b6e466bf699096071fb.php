<html>
	<head>
		<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
		<title>Sederhana</title>
	</head>
	<body>
		<h1 class="text-3xl">Home</h1>
		<p>Laravel + Vite + Tailwind + Ollama</p>
		<!-- <a href="/pengunjung">Para Tamu</a> -->
		<a href="/pengunjung/tambah" class="text-blue-600 underline hover:text-blue-800 hover:no-underline transition-colors">Sampurasun</a>
		<br/><br/>
		<!-- <input id="prompt"> -->
		<input 
	      type="text" 
	      id="prompt" 
	      placeholder="Tanya AI" 
	      class="pl-10 pr-3 py-2 bg-white border border-slate-300 rounded-md text-sm text-slate-900 placeholder-slate-400
	             shadow-sm transition duration-200
	             focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20"
	    />
		<button onclick="askAI()" class="btn btn-blue">Ask</button>
		<p id="result"></p>
		<br/>
		<hr>
		Para tamu:
		<p>
		<?php $__currentLoopData = $hasil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		        <?php echo e($h->nama); ?>,
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</p>
	</body>

</html><?php /**PATH /mnt/Data/srv/http/laravel/sederhana/resources/views/welcome.blade.php ENDPATH**/ ?>