<div>
	<div class="w-full h-32"></div>

	<div class="container mx-auto" style="margin-top: -128px;">
		<div class="py-6 h-screen">
			<div class="flex border border-grey rounded shadow-lg h-full">

				<!-- Left -->
				<div class="w-1/3 border flex flex-col">

					<!-- New Chat -->
					<div class="py-2 px-2 bg-grey-lightest">
						<input type="text" class="w-full px-2 py-2 text-sm" placeholder="new chat" />
					</div>

					<!-- Contacts -->
					<div class="bg-grey-lighter flex-1 overflow-auto">
						<div class="px-3 flex items-center bg-grey-light cursor-pointer">
							@foreach($conversations as $conversation)
							<div>
								<img class="h-12 w-12 rounded-full" src="https://darrenjameseeley.files.wordpress.com/2014/09/expendables3.jpeg" />
							</div>
							<div class="ml-4 flex-1 border-b border-grey-lighter py-4">
								<div class="flex items-bottom justify-between">
									<p class="text-grey-darkest">
										{{ $conversation->name }}
									</p>
									<p class="text-xs text-grey-darkest">
										12:45 pm
									</p>
								</div>
								<p class="text-grey-dark mt-1 text-sm">
									Get Andrés on this movie ASAP!
								</p>
							</div>
							@endforeach
						</div>

					</div>

				</div>


				<!-- Right -->
				<div class="w-2/3 border flex flex-col">

					<!-- Header -->
					<div class="py-2 px-3 bg-grey-lighter flex flex-row justify-between items-center">
						<div class="flex items-center">
							<div>
								<img class="w-10 h-10 rounded-full" src="https://darrenjameseeley.files.wordpress.com/2014/09/expendables3.jpeg" />
							</div>
							<div class="ml-4">
								<p class="text-grey-darkest">
									New Movie! Expendables 4
								</p>
								<p class="text-grey-darker text-xs mt-1">
									Andrés, Tom, Harrison, Arnold, Sylvester
								</p>
							</div>
						</div>

					</div>

					<!-- Messages -->
					<div class="flex-1 overflow-auto" style="background-color: #DAD3CC">
						<div class="py-2 px-3">

							<!-- Left Messages -->
							<div class="flex mb-2">
								<div class="rounded py-2 px-3" style="background-color: #F2F2F2">
									<p class="text-sm text-teal">
										Sylverter Stallone
									</p>
									<p class="text-sm mt-1">
										Hi everyone! Glad you could join! I am making a new movie.
									</p>
									<p class="text-right text-xs text-grey-dark mt-1">
										12:45 pm
									</p>
								</div>
							</div>

							<!-- Right Messages -->
							<div class="flex justify-end mb-2">
								<div class="rounded py-2 px-3" style="background-color: #E2F7CB">
									<p class="text-sm mt-1">
										Hi guys.
									</p>
									<p class="text-right text-xs text-grey-dark mt-1">
										12:45 pm
									</p>
								</div>
							</div>

						</div>
					</div>

					<!-- Input -->
					<div class="bg-grey-lighter px-4 py-4 flex items-center">
						<div class="flex-1 mx-4">
							<input class="w-full border rounded px-2 py-2" type="text" />
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>