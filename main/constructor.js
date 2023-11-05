function Book(title,author,year){
    this.title=title;
    this.author=author;
    this.year=year;
}

const book_two=new Date();
const book_one=new Date();
Book.prototype.getSummary=function(){
    return `${this.title} was written by ${this.author} in ${this.year}`;
}
Book.prototype.getAge=function(){
    const years=new Date().getFullYear - this.year;
    return `${this.title} is ${years} years old`;
}
console.log(book_one.getAge);