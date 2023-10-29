new Vue({
    el: '#app',
    data: {
        fullName: 'Your Name',
        jobTitle: 'Job Title',
        skills: ['Skill 1', 'Skill 2', 'Skill 3'],
        experiences: [
            {
                title: 'Job Title 1',
                company: 'Company 1',
                date: 'January 2020 - Present',
                description: 'Description of experience 1.'
            },
            // Add more experiences here
            
        ],
        education: [
            {
                school: 'School 1',
                degree: 'Degree 1',
                date: 'Graduation Date 1',
                description: 'Description of education 1.'
            },
            // Add more education here
        ]
    }
});
