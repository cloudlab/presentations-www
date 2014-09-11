ArrayList cells;
int maxCells = 2048;

void setup() {  
  size(1280, 720, P3D); 
  textFont(createFont("Arial", 20));

  colorMode(HSB, 100);
  cells = new ArrayList();
  Cell myCells = new Cell(width/2, height/2, 10, color(100, 0, 100));
  cells.add(myCells);
  smooth();
  noStroke();
}  

void draw() {  

  background(0);

  //stroke(90);
  for (int i = 0; i < cells.size(); i++) {
    Cell theCell = (Cell)cells.get(i);
    theCell.update(); // a single update function to keep things organized
  }

  if (frameCount%120 == 0 && cells.size() > 4
    && cells.size() < maxCells) { // do it every 120 frames
    mark(); // lets mark much more often
  }


  if (mousePressed) {
    //saveFrame("export_#####.png");
  }
}

// New mark function uses "while" to keep marking until we fail to find one to mark
void mark() {

  // Clear our any "marked" flags on cells
  for (int i = 0; i < cells.size(); i++) {
    Cell theCell = (Cell)cells.get(i);
    theCell.marked = false;
  }

  boolean stillMarking = true;

  // Mark cells
  while (stillMarking) { // do until you can't find one to mark

    stillMarking = false;
    //loop through our cells, looking for a potential spot to mark
    for (int i = 0; i < cells.size(); i++) {
      Cell theCell = (Cell)cells.get(i);
      if (theCell.canMark()) { // if the cell isnt marked alread
        float h = hue( theCell.clr) + 2;
        float s = min(100, saturation( theCell.clr) + 20); // add but cap at 100
        float b = brightness( theCell.clr);
        theCell.clr = color(h, s, b);
        theCell.marked = true; // set it as marked
        stillMarking = true;  // stay in the while loop
      }
    }
  }
}



class Cell {   

  PVector pos;
  float size;
  float maxSize;
  float growthRate;
  color clr;
  boolean marked;  // new: we can keep track of which ones we marked

    Cell(float _x, float _y, float sz, color _clr) {
    pos = new PVector(_x, _y);
    size = sz;
    clr = _clr; // map incoming "_variable" to class variable

    maxSize = random(28, 32);  // creates more variablity 
    growthRate = random(.1, .15);   // creates more variablity
  } 

  // put all of cells behaviors in an update function - cleaner
  void update() {

    this.jitter(); // jitter 
    this.avoid(); // avoid

      if (cells.size() < maxCells) {
      size += growthRate; // grow according to your individual rate
      this.divide(); // potentially divide
    }

    this.render();
  }

  // New function, returns true or false if cell can be marked
  boolean canMark() {

    if (marked) 
      return false; // if were already marked we can be marked again

    // look at all nearby cells and see if any are "marked"
    boolean markable = true;
    for (int i=0;i<cells.size();i++) {

      Cell theCell = (Cell) cells.get(i);
      if (theCell != this) {
        float d= pos.dist(theCell.pos);
        if (d < 50) {
          if (theCell.marked) {  // one nearby us is marked, so we CAN'T be
            return false;
          }
        }
      }
    }

    return true; // nothing around us was marked, so we CAN be
  }

  void jitter() {
    float amt = 1.0;
    PVector run = new PVector(random(-amt, amt), random(-amt, amt));
    this.pos.add(run);
  }

  void divide() {
    if (size > maxSize) {
      //big enough to separate into 2 cells
      float X = pos.x;
      float Y = pos.y;
      Cell m = new Cell(X + random(-1, 1), Y+ random(-1, 1), size/2.0, clr); // New: adaptive sizing of children
      Cell n = new Cell(X + random(-1, 1), Y+ random(-1, 1), size/2.0, clr); // New: adaptive sizing of children
      cells.remove(this);
      cells.add(m);
      cells.add(n);
    }
  }

  void avoid() {

    for (int i=0;i<cells.size();i++) {

      Cell theCell = (Cell) cells.get(i);

      if (theCell != this) {

        float d= pos.dist(theCell.pos);
        float buffer = 3.0;
        if (d < size/2 + theCell.size/2 + buffer) {

          PVector direction = new PVector();
          direction.set(pos);
          direction.sub(theCell.pos);
          direction.normalize();
          direction.mult(1.25);
          pos.add(direction);
        }
      }
    }
  }

  void render() {

    fill(clr);
    ellipse(pos.x, pos.y, size, size);
  }
}

