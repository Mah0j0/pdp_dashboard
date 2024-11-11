<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>titulo</title>
</head>
<body>
<div class="bg-indigo-600 px-8 pt-10 lg:pt-14 pb-16 flex justify-between items-center   mb-3">
    <!-- title -->
    <h1 class="text-xl text-white">Project</h1>
    <a
       href="#"
       class="btn bg-white text-gray-800 border-gray-600 hover:bg-gray-100 hover:text-gray-800 hover:border-gray-200 active:bg-gray-100 active:text-gray-800 active:border-gray-200 focus:outline-none focus:ring-4 focus:ring-indigo-300">
       Create New Project
    </a>
 </div>
 <div class="-mt-12 mx-6 mb-6 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-2 xl:grid-cols-4">
    <!-- card -->
    <div class="card shadow">
       <!-- card body -->
       <div class="card-body">
          <!-- content -->
          <div class="flex justify-between items-center">
             <h4>Projects</h4>
             <div class="bg-indigo-600 bg-opacity-10 rounded-md w-10 h-10 flex items-center justify-center text-center text-indigo-600">
                <i data-feather="briefcase"></i>
             </div>
          </div>
          <div class="mt-4 flex flex-col gap-0 text-base">
             <h2 class="text-xl font-bold">18</h2>
             <div>
                <span>2</span>
                <span class="text-gray-500">Completed</span>
             </div>
          </div>
       </div>
    </div>
    <!-- card -->
    <div class="card shadow">
       <!-- card boduy -->
       <div class="card-body">
          <!-- content -->
          <div class="flex justify-between items-center">
             <h4>Active Task</h4>
             <div class="bg-indigo-600 bg-opacity-10 rounded-md w-10 h-10 flex items-center justify-center text-center text-indigo-600">
                <i data-feather="list"></i>
             </div>
          </div>
          <div class="mt-4 flex flex-col gap-0 text-base">
             <h2 class="text-xl font-bold">132</h2>
             <div>
                <span>28</span>
                <span class="text-gray-500">Completed</span>
             </div>
          </div>
       </div>
    </div>
    <!-- card -->
    <div class="card shadow">
       <!-- card body -->
       <div class="card-body">
          <!-- content -->
          <div class="flex justify-between items-center">
             <h4>Productivity</h4>
             <div class="bg-indigo-600 bg-opacity-10 rounded-md w-10 h-10 flex items-center justify-center text-center text-indigo-600">
                <i data-feather="target"></i>
             </div>
          </div>
          <div class="mt-4 flex flex-col gap-0 text-base">
             <h2 class="text-xl font-bold">76%</h2>
             <div>
                <span class="text-green-600">5%</span>
                <span class="text-gray-500">Completed</span>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="mx-6 grid grid-cols-1 xl:grid-cols-3 grid-rows-1 grid-flow-row-dense gap-6">
    <div class="xl:col-span-2">
       <div class="card h-full shadow">
          <!-- heading -->
          <div class="border-b border-gray-300 px-5 py-4">
             <h4>Active Projects</h4>
          </div>

          <div class="relative overflow-x-auto">
             <!-- table -->
             <table class="text-left w-full whitespace-nowrap">
                <thead class="text-gray-700">
                   <tr>
                      <th scope="col" class="border-b bg-gray-100 px-6 py-3">Project name</th>
                      <th scope="col" class="border-b bg-gray-100 px-6 py-3">Hours</th>
                      <th scope="col" class="border-b bg-gray-100 px-6 py-3">Priority</th>
                      <th scope="col" class="border-b bg-gray-100 px-6 py-3">Members</th>
                      <th scope="col" class="border-b bg-gray-100 px-6 py-3">Progress</th>
                   </tr>
                </thead>
                <tbody>
                   <tr>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                         <div class="flex items-center">
                            <h5 class="mb-1 ml-4"><a href="#!">Dropbox Design System</a></h5>
                         </div>
                      </td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">34</td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                         <span class="bg-yellow-200 px-2 py-1 text-yellow-700 text-sm font-medium rounded-full inline-block whitespace-nowrap text-center">Medium</span>
                      </td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">34</td>
                      <td class="border-b border-gray-300 py-3 px-6 text-left">
                         <p class="text-gray-800">Completed</p>
                      </td>
                   </tr>
                   <tr>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                         <div class="flex items-center">
                            <h5 class="ml-4"><a href="#!">GitHub Satellite</a></h5>
                         </div>
                      </td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">120</td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                         <span class="bg-cyan-200 px-2 py-1 text-cyan-700 text-sm font-medium rounded-full inline-block whitespace-nowrap text-center">Low</span>
                      </td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">34</td>
                      <td class="border-b border-gray-300 py-3 px-6 text-left">
                         <p class="text-gray-800">Completed</p>
                      </td>
                   </tr>
                   <tr>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                         <div class="flex items-center">
                            <h5 class="mb-1 ml-4"><a href="#!">Dropbox Design System</a></h5>
                         </div>
                      </td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">34</td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                         <span class="bg-yellow-200 px-2 py-1 text-yellow-700 text-sm font-medium rounded-full inline-block whitespace-nowrap text-center">Medium</span>
                      </td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">34</td>
                      <td class="border-b border-gray-300 py-3 px-6 text-left">
                         <p class="text-gray-800">Completed</p>
                      </td>
                   </tr>
                   <tr>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                         <div class="flex items-center">
                            <h5 class="ml-4"><a href="#!">3D Character Modelling</a></h5>
                         </div>
                      </td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">89</td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                         <span class="bg-yellow-200 px-2 py-1 text-yellow-700 text-sm font-medium rounded-full inline-block whitespace-nowrap text-center">Medium</span>
                      </td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">34</td>
                      <td class="border-b border-gray-300 py-3 px-6 text-left">
                         <p class="text-gray-800">Completed</p>
                      </td>
                   </tr>
                   <tr>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                         <div class="flex items-center">
                            <h5 class="ml-4"><a href="#!">Webapp Design System</a></h5>
                         </div>
                      </td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">89</td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                         <span class="bg-green-200 px-2 py-1 text-green-700 text-sm font-medium rounded-full inline-block whitespace-nowrap text-center">Track</span>
                      </td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">34</td>
                      <td class="border-b border-gray-300 py-3 px-6 text-left">
                         <p class="text-gray-800">Completed</p>
                      </td>
                   </tr>
                   <tr>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                         <div class="flex items-center">
                            <h5 class="mb-1 ml-4"><a href="#!">Dropbox Design System</a></h5>
                         </div>
                      </td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">34</td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                         <span class="bg-yellow-200 px-2 py-1 text-yellow-700 text-sm font-medium rounded-full inline-block whitespace-nowrap text-center">Medium</span>
                      </td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">34</td>
                      <td class="border-b border-gray-300 py-3 px-6 text-left">
                         <p class="text-gray-800">Completed</p>
                      </td>
                   </tr>
                   <tr>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                         <div class="flex items-center">
                            <h5 class="ml-4"><a href="#!">Github Event Design</a></h5>
                         </div>
                      </td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">120</td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">
                         <span class="bg-cyan-200 px-2 py-1 text-cyan-700 text-sm font-medium rounded-full inline-block whitespace-nowrap text-center">Low</span>
                      </td>
                      <td class="border-b border-gray-300 font-medium py-3 px-6 text-left">34</td>
                      <td class="border-b border-gray-300 py-3 px-6 text-left">
                         <p class="text-gray-800">Completed</p>
                      </td>
                   </tr>
                </tbody>
             </table>
          </div>
       </div>
    </div>
</div>
</body>
</html>