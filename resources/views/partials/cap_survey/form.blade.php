<form method="POST" action="{{$form_action}}" >
		@csrf
		<div class="my-4">
				<label class="font-bold" for="name">Name: </label>
				<input class="w-full p-2 border rounded mt-2" type="text" id="name" name="name" />
		</div>
		<div class="my-4">
				<label class="font-bold block" for="due_date">Due Date: </label>
				<input class="p-2 border rounded mt-2" type="date" id="due_date" name="due_date" />
		</div>
		<div class="my-4">
				<label  class="font-bold block" for="samples_expire">Samples Expire: </label>
				<input class="p-2 border rounded mt-2" type="date" id="samples_expire" name="samples_expire" />
		</div>
		<div class="flex justify-between">
				<div>
						<div class="my-4">
								<label class="font-bold" for="director_signed">Signed by Director?</label>
								<input type="checkbox" id="director_signed" name="director_signed" />
						</div>
						<div class="my-4">
								<label class="font-bold" for="pathologist_signed">Signed by Pathologist?</label>
								<input class="p-2" type="checkbox" id="pathologist_signed" name="pathologist_signed" />
						</div>
				</div>
				<div>
						<div class="my-4">
								<label class="font-bold" for="employee_signed">Signed by Employee(s)?</label>
								<input type="checkbox" id="employee_signed" name="employee_signed" />
						</div>
				</div>
		</div>
		<div class="my-4">
				<button class="p-4 bg-gray-900 text-gray-100">Submit</button>
		</div>

</form>
