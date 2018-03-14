<div v-if="projects">
    <h1 class="title is-3">My Projects</h1>

    <ul>
        <li v-for="project in projects">
            <h3 @click="deleteProject(project)">@{{ project.name }}</h3>
        </li>
    </ul>
    <hr>
</div>
