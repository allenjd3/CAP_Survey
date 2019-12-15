<form action="" method="POST">
		@csrf
		<div class="my-4">
				<label class="font-bold" for="name">Name:</label>
				<input type="text" id="name" class="p-2 border rounded w-full mt-2" />
		</div>
		<div class="my-4">
				<label class="font-bold" for="email">Email:</label>
				<input type="email" id="email" class="p-2 border rounded w-full mt-2" />
		</div>
		<div class="my-4">
				<button class="p-4 bg-gray-900 text-gray-100">New Employee</button>
		</div>
</form>
